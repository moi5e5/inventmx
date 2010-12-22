<?php

/**
 * RespuestaMensaje form base class.
 *
 * @method RespuestaMensaje getObject() Returns the current form's model object
 *
 * @package    inventmx
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseRespuestaMensajeForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'respuesta_mensaje_id' => new sfWidgetFormInputHidden(),
      'mensaje_id'           => new sfWidgetFormPropelChoice(array('model' => 'Mensaje', 'add_empty' => false)),
      'cuerpo'               => new sfWidgetFormTextarea(),
      'created_at'           => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'respuesta_mensaje_id' => new sfValidatorPropelChoice(array('model' => 'RespuestaMensaje', 'column' => 'respuesta_mensaje_id', 'required' => false)),
      'mensaje_id'           => new sfValidatorPropelChoice(array('model' => 'Mensaje', 'column' => 'mensaje_id')),
      'cuerpo'               => new sfValidatorString(array('required' => false)),
      'created_at'           => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('respuesta_mensaje[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'RespuestaMensaje';
  }


}
