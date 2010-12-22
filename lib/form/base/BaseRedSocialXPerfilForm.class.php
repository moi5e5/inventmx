<?php

/**
 * RedSocialXPerfil form base class.
 *
 * @method RedSocialXPerfil getObject() Returns the current form's model object
 *
 * @package    inventmx
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseRedSocialXPerfilForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'red_social_x_perfil_id' => new sfWidgetFormInputHidden(),
      'user_id'                => new sfWidgetFormPropelChoice(array('model' => 'sfGuardUser', 'add_empty' => false)),
      'red_social_id'          => new sfWidgetFormPropelChoice(array('model' => 'RedSocial', 'add_empty' => false)),
      'url'                    => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'red_social_x_perfil_id' => new sfValidatorPropelChoice(array('model' => 'RedSocialXPerfil', 'column' => 'red_social_x_perfil_id', 'required' => false)),
      'user_id'                => new sfValidatorPropelChoice(array('model' => 'sfGuardUser', 'column' => 'id')),
      'red_social_id'          => new sfValidatorPropelChoice(array('model' => 'RedSocial', 'column' => 'red_social_id')),
      'url'                    => new sfValidatorString(array('max_length' => 250)),
    ));

    $this->widgetSchema->setNameFormat('red_social_x_perfil[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'RedSocialXPerfil';
  }


}
