<?php

/**
 * Boletin form base class.
 *
 * @method Boletin getObject() Returns the current form's model object
 *
 * @package    inventmx
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseBoletinForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'boletin_id' => new sfWidgetFormInputHidden(),
      'blog_id'    => new sfWidgetFormPropelChoice(array('model' => 'Blog', 'add_empty' => false)),
      'nombre'     => new sfWidgetFormInputText(),
      'send_at'    => new sfWidgetFormDateTime(),
      'created_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'boletin_id' => new sfValidatorPropelChoice(array('model' => 'Boletin', 'column' => 'boletin_id', 'required' => false)),
      'blog_id'    => new sfValidatorPropelChoice(array('model' => 'Blog', 'column' => 'blog_id')),
      'nombre'     => new sfValidatorString(array('max_length' => 250)),
      'send_at'    => new sfValidatorDateTime(array('required' => false)),
      'created_at' => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('boletin[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Boletin';
  }


}
