<?php

/**
 * sfGuardUserProfile filter form base class.
 *
 * @package    inventmx
 * @subpackage filter
 * @author     Your name here
 */
abstract class BasesfGuardUserProfileFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'user_id'                  => new sfWidgetFormPropelChoice(array('model' => 'sfGuardUser', 'add_empty' => true)),
      'name'                     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'lastname'                 => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'lastname2'                => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'email'                    => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'user_id'                  => new sfValidatorPropelChoice(array('required' => false, 'model' => 'sfGuardUser', 'column' => 'id')),
      'name'                     => new sfValidatorPass(array('required' => false)),
      'lastname'                 => new sfValidatorPass(array('required' => false)),
      'lastname2'                => new sfValidatorPass(array('required' => false)),
      'email'                    => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('sf_guard_user_profile_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'sfGuardUserProfile';
  }

  public function getFields()
  {
    return array(
      'sf_guard_user_profile_id' => 'Number',
      'user_id'                  => 'ForeignKey',
      'name'                     => 'Text',
      'lastname'                 => 'Text',
      'lastname2'                => 'Text',
      'email'                    => 'Text',
    );
  }
}
