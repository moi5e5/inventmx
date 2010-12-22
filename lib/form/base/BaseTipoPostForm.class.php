<?php

/**
 * TipoPost form base class.
 *
 * @method TipoPost getObject() Returns the current form's model object
 *
 * @package    inventmx
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseTipoPostForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'tipo_post_id' => new sfWidgetFormInputHidden(),
      'nombre'       => new sfWidgetFormInputText(),
      'created_at'   => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'tipo_post_id' => new sfValidatorPropelChoice(array('model' => 'TipoPost', 'column' => 'tipo_post_id', 'required' => false)),
      'nombre'       => new sfValidatorString(array('max_length' => 250)),
      'created_at'   => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tipo_post[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'TipoPost';
  }


}
