<?php

/**
 * Comentario form base class.
 *
 * @method Comentario getObject() Returns the current form's model object
 *
 * @package    inventmx
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseComentarioForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'comentario_id' => new sfWidgetFormInputHidden(),
      'user_id'       => new sfWidgetFormPropelChoice(array('model' => 'sfGuardUser', 'add_empty' => false)),
      'post_id'       => new sfWidgetFormPropelChoice(array('model' => 'Post', 'add_empty' => false)),
      'comentario'    => new sfWidgetFormTextarea(),
      'respuesta'     => new sfWidgetFormTextarea(),
      'created_at'    => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'comentario_id' => new sfValidatorPropelChoice(array('model' => 'Comentario', 'column' => 'comentario_id', 'required' => false)),
      'user_id'       => new sfValidatorPropelChoice(array('model' => 'sfGuardUser', 'column' => 'id')),
      'post_id'       => new sfValidatorPropelChoice(array('model' => 'Post', 'column' => 'post_id')),
      'comentario'    => new sfValidatorString(array('required' => false)),
      'respuesta'     => new sfValidatorString(array('required' => false)),
      'created_at'    => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('comentario[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Comentario';
  }


}
