<?php

/**
 * Boletin filter form base class.
 *
 * @package    inventmx
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseBoletinFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'blog_id'    => new sfWidgetFormPropelChoice(array('model' => 'Blog', 'add_empty' => true)),
      'nombre'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'send_at'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'created_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'blog_id'    => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Blog', 'column' => 'blog_id')),
      'nombre'     => new sfValidatorPass(array('required' => false)),
      'send_at'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'created_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('boletin_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Boletin';
  }

  public function getFields()
  {
    return array(
      'boletin_id' => 'Number',
      'blog_id'    => 'ForeignKey',
      'nombre'     => 'Text',
      'send_at'    => 'Date',
      'created_at' => 'Date',
    );
  }
}
