<?php

/**
 * Respuesta form base class.
 *
 * @method Respuesta getObject() Returns the current form's model object
 *
 * @package    inventmx
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseRespuestaForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'respuesta_id' => new sfWidgetFormInputHidden(),
      'post_id'      => new sfWidgetFormPropelChoice(array('model' => 'Post', 'add_empty' => false)),
      'opcion'       => new sfWidgetFormInputText(),
      'cantidad'     => new sfWidgetFormInputText(),
      'created_at'   => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'respuesta_id' => new sfValidatorPropelChoice(array('model' => 'Respuesta', 'column' => 'respuesta_id', 'required' => false)),
      'post_id'      => new sfValidatorPropelChoice(array('model' => 'Post', 'column' => 'post_id')),
      'opcion'       => new sfValidatorString(array('max_length' => 250)),
      'cantidad'     => new sfValidatorString(array('max_length' => 250)),
      'created_at'   => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('respuesta[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Respuesta';
  }


}
