<?php

/**
 * BlogXTematica form base class.
 *
 * @method BlogXTematica getObject() Returns the current form's model object
 *
 * @package    inventmx
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseBlogXTematicaForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'blog_x_tematica_id' => new sfWidgetFormInputHidden(),
      'blog_id'            => new sfWidgetFormPropelChoice(array('model' => 'Blog', 'add_empty' => false)),
      'tematica_id'        => new sfWidgetFormPropelChoice(array('model' => 'Tematica', 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'blog_x_tematica_id' => new sfValidatorPropelChoice(array('model' => 'BlogXTematica', 'column' => 'blog_x_tematica_id', 'required' => false)),
      'blog_id'            => new sfValidatorPropelChoice(array('model' => 'Blog', 'column' => 'blog_id')),
      'tematica_id'        => new sfValidatorPropelChoice(array('model' => 'Tematica', 'column' => 'tematica_id')),
    ));

    $this->widgetSchema->setNameFormat('blog_x_tematica[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'BlogXTematica';
  }


}
