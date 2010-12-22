<?php

/**
 * Respuesta filter form base class.
 *
 * @package    inventmx
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseRespuestaFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'post_id'      => new sfWidgetFormPropelChoice(array('model' => 'Post', 'add_empty' => true)),
      'opcion'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cantidad'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'created_at'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'post_id'      => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Post', 'column' => 'post_id')),
      'opcion'       => new sfValidatorPass(array('required' => false)),
      'cantidad'     => new sfValidatorPass(array('required' => false)),
      'created_at'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('respuesta_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Respuesta';
  }

  public function getFields()
  {
    return array(
      'respuesta_id' => 'Number',
      'post_id'      => 'ForeignKey',
      'opcion'       => 'Text',
      'cantidad'     => 'Text',
      'created_at'   => 'Date',
    );
  }
}
