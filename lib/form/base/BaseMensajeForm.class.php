<?php

/**
 * Mensaje form base class.
 *
 * @method Mensaje getObject() Returns the current form's model object
 *
 * @package    inventmx
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseMensajeForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'mensaje_id'      => new sfWidgetFormInputHidden(),
      'destinatario_id' => new sfWidgetFormPropelChoice(array('model' => 'sfGuardUser', 'add_empty' => false)),
      'remitente_id'    => new sfWidgetFormPropelChoice(array('model' => 'sfGuardUser', 'add_empty' => false)),
      'anonimo'         => new sfWidgetFormInputText(),
      'asunto'          => new sfWidgetFormInputText(),
      'mensaje'         => new sfWidgetFormTextarea(),
      'send_at'         => new sfWidgetFormDateTime(),
      'created_at'      => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'mensaje_id'      => new sfValidatorPropelChoice(array('model' => 'Mensaje', 'column' => 'mensaje_id', 'required' => false)),
      'destinatario_id' => new sfValidatorPropelChoice(array('model' => 'sfGuardUser', 'column' => 'id')),
      'remitente_id'    => new sfValidatorPropelChoice(array('model' => 'sfGuardUser', 'column' => 'id')),
      'anonimo'         => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'asunto'          => new sfValidatorString(array('max_length' => 250)),
      'mensaje'         => new sfValidatorString(array('required' => false)),
      'send_at'         => new sfValidatorDateTime(array('required' => false)),
      'created_at'      => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('mensaje[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Mensaje';
  }


}
