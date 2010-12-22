<?php

/**
 * Post form base class.
 *
 * @method Post getObject() Returns the current form's model object
 *
 * @package    inventmx
 * @subpackage form
 * @author     Your name here
 */
abstract class BasePostForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'post_id'      => new sfWidgetFormInputHidden(),
      'tipo_post_id' => new sfWidgetFormPropelChoice(array('model' => 'TipoPost', 'add_empty' => false)),
      'user_id'      => new sfWidgetFormPropelChoice(array('model' => 'sfGuardUser', 'add_empty' => false)),
      'blog_id'      => new sfWidgetFormPropelChoice(array('model' => 'Blog', 'add_empty' => false)),
      'nombre'       => new sfWidgetFormInputText(),
      'nota'         => new sfWidgetFormInputText(),
      'tags'         => new sfWidgetFormInputText(),
      'visitas'      => new sfWidgetFormInputText(),
      'published_at' => new sfWidgetFormDateTime(),
      'created_at'   => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'post_id'      => new sfValidatorPropelChoice(array('model' => 'Post', 'column' => 'post_id', 'required' => false)),
      'tipo_post_id' => new sfValidatorPropelChoice(array('model' => 'TipoPost', 'column' => 'tipo_post_id')),
      'user_id'      => new sfValidatorPropelChoice(array('model' => 'sfGuardUser', 'column' => 'id')),
      'blog_id'      => new sfValidatorPropelChoice(array('model' => 'Blog', 'column' => 'blog_id')),
      'nombre'       => new sfValidatorString(array('max_length' => 45)),
      'nota'         => new sfValidatorString(array('max_length' => 250)),
      'tags'         => new sfValidatorString(array('max_length' => 250)),
      'visitas'      => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'published_at' => new sfValidatorDateTime(array('required' => false)),
      'created_at'   => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('post[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Post';
  }


}
