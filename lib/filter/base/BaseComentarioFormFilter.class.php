<?php

/**
 * Comentario filter form base class.
 *
 * @package    inventmx
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseComentarioFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'user_id'       => new sfWidgetFormPropelChoice(array('model' => 'sfGuardUser', 'add_empty' => true)),
      'post_id'       => new sfWidgetFormPropelChoice(array('model' => 'Post', 'add_empty' => true)),
      'comentario'    => new sfWidgetFormFilterInput(),
      'respuesta'     => new sfWidgetFormFilterInput(),
      'created_at'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'user_id'       => new sfValidatorPropelChoice(array('required' => false, 'model' => 'sfGuardUser', 'column' => 'id')),
      'post_id'       => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Post', 'column' => 'post_id')),
      'comentario'    => new sfValidatorPass(array('required' => false)),
      'respuesta'     => new sfValidatorPass(array('required' => false)),
      'created_at'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('comentario_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Comentario';
  }

  public function getFields()
  {
    return array(
      'comentario_id' => 'Number',
      'user_id'       => 'ForeignKey',
      'post_id'       => 'ForeignKey',
      'comentario'    => 'Text',
      'respuesta'     => 'Text',
      'created_at'    => 'Date',
    );
  }
}
