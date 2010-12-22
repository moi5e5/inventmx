<?php

/**
 * BlogXTematica filter form base class.
 *
 * @package    inventmx
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseBlogXTematicaFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'blog_id'            => new sfWidgetFormPropelChoice(array('model' => 'Blog', 'add_empty' => true)),
      'tematica_id'        => new sfWidgetFormPropelChoice(array('model' => 'Tematica', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'blog_id'            => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Blog', 'column' => 'blog_id')),
      'tematica_id'        => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Tematica', 'column' => 'tematica_id')),
    ));

    $this->widgetSchema->setNameFormat('blog_x_tematica_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'BlogXTematica';
  }

  public function getFields()
  {
    return array(
      'blog_x_tematica_id' => 'Number',
      'blog_id'            => 'ForeignKey',
      'tematica_id'        => 'ForeignKey',
    );
  }
}
