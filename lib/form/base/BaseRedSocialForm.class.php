<?php

/**
 * RedSocial form base class.
 *
 * @method RedSocial getObject() Returns the current form's model object
 *
 * @package    inventmx
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseRedSocialForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'red_social_id' => new sfWidgetFormInputHidden(),
      'nombre'        => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'red_social_id' => new sfValidatorPropelChoice(array('model' => 'RedSocial', 'column' => 'red_social_id', 'required' => false)),
      'nombre'        => new sfValidatorString(array('max_length' => 250)),
    ));

    $this->widgetSchema->setNameFormat('red_social[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'RedSocial';
  }


}
