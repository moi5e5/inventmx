<?php

/**
 * RedSocialXPerfil filter form base class.
 *
 * @package    inventmx
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseRedSocialXPerfilFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'user_id'                => new sfWidgetFormPropelChoice(array('model' => 'sfGuardUser', 'add_empty' => true)),
      'red_social_id'          => new sfWidgetFormPropelChoice(array('model' => 'RedSocial', 'add_empty' => true)),
      'url'                    => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'user_id'                => new sfValidatorPropelChoice(array('required' => false, 'model' => 'sfGuardUser', 'column' => 'id')),
      'red_social_id'          => new sfValidatorPropelChoice(array('required' => false, 'model' => 'RedSocial', 'column' => 'red_social_id')),
      'url'                    => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('red_social_x_perfil_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'RedSocialXPerfil';
  }

  public function getFields()
  {
    return array(
      'red_social_x_perfil_id' => 'Number',
      'user_id'                => 'ForeignKey',
      'red_social_id'          => 'ForeignKey',
      'url'                    => 'Text',
    );
  }
}
