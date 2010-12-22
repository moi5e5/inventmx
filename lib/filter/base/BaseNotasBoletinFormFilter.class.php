<?php

/**
 * NotasBoletin filter form base class.
 *
 * @package    inventmx
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseNotasBoletinFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'boletin_id'       => new sfWidgetFormPropelChoice(array('model' => 'Boletin', 'add_empty' => true)),
      'post_id'          => new sfWidgetFormPropelChoice(array('model' => 'Post', 'add_empty' => true)),
      'es_principal'     => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'orden'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'created_at'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'boletin_id'       => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Boletin', 'column' => 'boletin_id')),
      'post_id'          => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Post', 'column' => 'post_id')),
      'es_principal'     => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'orden'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'created_at'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('notas_boletin_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'NotasBoletin';
  }

  public function getFields()
  {
    return array(
      'notas_boletin_id' => 'Number',
      'boletin_id'       => 'ForeignKey',
      'post_id'          => 'ForeignKey',
      'es_principal'     => 'Boolean',
      'orden'            => 'Number',
      'created_at'       => 'Date',
    );
  }
}
