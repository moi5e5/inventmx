<?php

/**
 * NotasBoletin form base class.
 *
 * @method NotasBoletin getObject() Returns the current form's model object
 *
 * @package    inventmx
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseNotasBoletinForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'notas_boletin_id' => new sfWidgetFormInputHidden(),
      'boletin_id'       => new sfWidgetFormPropelChoice(array('model' => 'Boletin', 'add_empty' => false)),
      'post_id'          => new sfWidgetFormPropelChoice(array('model' => 'Post', 'add_empty' => false)),
      'es_principal'     => new sfWidgetFormInputCheckbox(),
      'orden'            => new sfWidgetFormInputText(),
      'created_at'       => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'notas_boletin_id' => new sfValidatorPropelChoice(array('model' => 'NotasBoletin', 'column' => 'notas_boletin_id', 'required' => false)),
      'boletin_id'       => new sfValidatorPropelChoice(array('model' => 'Boletin', 'column' => 'boletin_id')),
      'post_id'          => new sfValidatorPropelChoice(array('model' => 'Post', 'column' => 'post_id')),
      'es_principal'     => new sfValidatorBoolean(),
      'orden'            => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'created_at'       => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('notas_boletin[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'NotasBoletin';
  }


}
