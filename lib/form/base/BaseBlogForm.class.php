<?php

/**
 * Blog form base class.
 *
 * @method Blog getObject() Returns the current form's model object
 *
 * @package    inventmx
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseBlogForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'blog_id'    => new sfWidgetFormInputHidden(),
      'user_id'    => new sfWidgetFormPropelChoice(array('model' => 'sfGuardUser', 'add_empty' => false)),
      'nombre'     => new sfWidgetFormInputText(),
      'created_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'blog_id'    => new sfValidatorPropelChoice(array('model' => 'Blog', 'column' => 'blog_id', 'required' => false)),
      'user_id'    => new sfValidatorPropelChoice(array('model' => 'sfGuardUser', 'column' => 'id')),
      'nombre'     => new sfValidatorString(array('max_length' => 250)),
      'created_at' => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('blog[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Blog';
  }


}
