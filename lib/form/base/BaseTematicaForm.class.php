<?php

/**
 * Tematica form base class.
 *
 * @method Tematica getObject() Returns the current form's model object
 *
 * @package    inventmx
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseTematicaForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'tematica_id' => new sfWidgetFormInputHidden(),
      'nombre'      => new sfWidgetFormInputText(),
      'created_at'  => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'tematica_id' => new sfValidatorPropelChoice(array('model' => 'Tematica', 'column' => 'tematica_id', 'required' => false)),
      'nombre'      => new sfValidatorString(array('max_length' => 250)),
      'created_at'  => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tematica[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Tematica';
  }


}
