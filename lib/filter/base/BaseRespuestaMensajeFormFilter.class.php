<?php

/**
 * RespuestaMensaje filter form base class.
 *
 * @package    inventmx
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseRespuestaMensajeFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'mensaje_id'           => new sfWidgetFormPropelChoice(array('model' => 'Mensaje', 'add_empty' => true)),
      'cuerpo'               => new sfWidgetFormFilterInput(),
      'created_at'           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'mensaje_id'           => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Mensaje', 'column' => 'mensaje_id')),
      'cuerpo'               => new sfValidatorPass(array('required' => false)),
      'created_at'           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('respuesta_mensaje_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'RespuestaMensaje';
  }

  public function getFields()
  {
    return array(
      'respuesta_mensaje_id' => 'Number',
      'mensaje_id'           => 'ForeignKey',
      'cuerpo'               => 'Text',
      'created_at'           => 'Date',
    );
  }
}
