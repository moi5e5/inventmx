<?php

/**
 * Anonimo form base class.
 *
 * @method Anonimo getObject() Returns the current form's model object
 *
 * @package    inventmx
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseAnonimoForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'anonimo_id' => new sfWidgetFormInputHidden(),
      'nombre'     => new sfWidgetFormInputText(),
      'email'      => new sfWidgetFormInputText(),
      'created_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'anonimo_id' => new sfValidatorPropelChoice(array('model' => 'Anonimo', 'column' => 'anonimo_id', 'required' => false)),
      'nombre'     => new sfValidatorString(array('max_length' => 250)),
      'email'      => new sfValidatorString(array('max_length' => 250)),
      'created_at' => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('anonimo[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Anonimo';
  }


}
