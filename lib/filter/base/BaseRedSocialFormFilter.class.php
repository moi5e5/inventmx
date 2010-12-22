<?php

/**
 * RedSocial filter form base class.
 *
 * @package    inventmx
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseRedSocialFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'nombre'        => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('red_social_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'RedSocial';
  }

  public function getFields()
  {
    return array(
      'red_social_id' => 'Number',
      'nombre'        => 'Text',
    );
  }
}
