<?php

/**
 * sfGuardUserProfile form base class.
 *
 * @method sfGuardUserProfile getObject() Returns the current form's model object
 *
 * @package    inventmx
 * @subpackage form
 * @author     Your name here
 */
abstract class BasesfGuardUserProfileForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'sf_guard_user_profile_id' => new sfWidgetFormInputHidden(),
      'user_id'                  => new sfWidgetFormPropelChoice(array('model' => 'sfGuardUser', 'add_empty' => false)),
      'name'                     => new sfWidgetFormInputText(),
      'lastname'                 => new sfWidgetFormInputText(),
      'lastname2'                => new sfWidgetFormInputText(),
      'email'                    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'sf_guard_user_profile_id' => new sfValidatorPropelChoice(array('model' => 'sfGuardUserProfile', 'column' => 'sf_guard_user_profile_id', 'required' => false)),
      'user_id'                  => new sfValidatorPropelChoice(array('model' => 'sfGuardUser', 'column' => 'id')),
      'name'                     => new sfValidatorString(array('max_length' => 250)),
      'lastname'                 => new sfValidatorString(array('max_length' => 250)),
      'lastname2'                => new sfValidatorString(array('max_length' => 250)),
      'email'                    => new sfValidatorString(array('max_length' => 100)),
    ));

    $this->widgetSchema->setNameFormat('sf_guard_user_profile[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'sfGuardUserProfile';
  }


}
