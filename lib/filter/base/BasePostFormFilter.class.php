<?php

/**
 * Post filter form base class.
 *
 * @package    inventmx
 * @subpackage filter
 * @author     Your name here
 */
abstract class BasePostFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'tipo_post_id' => new sfWidgetFormPropelChoice(array('model' => 'TipoPost', 'add_empty' => true)),
      'user_id'      => new sfWidgetFormPropelChoice(array('model' => 'sfGuardUser', 'add_empty' => true)),
      'blog_id'      => new sfWidgetFormPropelChoice(array('model' => 'Blog', 'add_empty' => true)),
      'nombre'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nota'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'tags'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'visitas'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'published_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'created_at'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'tipo_post_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'TipoPost', 'column' => 'tipo_post_id')),
      'user_id'      => new sfValidatorPropelChoice(array('required' => false, 'model' => 'sfGuardUser', 'column' => 'id')),
      'blog_id'      => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Blog', 'column' => 'blog_id')),
      'nombre'       => new sfValidatorPass(array('required' => false)),
      'nota'         => new sfValidatorPass(array('required' => false)),
      'tags'         => new sfValidatorPass(array('required' => false)),
      'visitas'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'published_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'created_at'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('post_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Post';
  }

  public function getFields()
  {
    return array(
      'post_id'      => 'Number',
      'tipo_post_id' => 'ForeignKey',
      'user_id'      => 'ForeignKey',
      'blog_id'      => 'ForeignKey',
      'nombre'       => 'Text',
      'nota'         => 'Text',
      'tags'         => 'Text',
      'visitas'      => 'Number',
      'published_at' => 'Date',
      'created_at'   => 'Date',
    );
  }
}
