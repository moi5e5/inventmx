<?php

/**
 * Mensaje filter form base class.
 *
 * @package    inventmx
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseMensajeFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'destinatario_id' => new sfWidgetFormPropelChoice(array('model' => 'sfGuardUser', 'add_empty' => true)),
      'remitente_id'    => new sfWidgetFormPropelChoice(array('model' => 'sfGuardUser', 'add_empty' => true)),
      'anonimo'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'asunto'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'mensaje'         => new sfWidgetFormFilterInput(),
      'send_at'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'created_at'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'destinatario_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'sfGuardUser', 'column' => 'id')),
      'remitente_id'    => new sfValidatorPropelChoice(array('required' => false, 'model' => 'sfGuardUser', 'column' => 'id')),
      'anonimo'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'asunto'          => new sfValidatorPass(array('required' => false)),
      'mensaje'         => new sfValidatorPass(array('required' => false)),
      'send_at'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'created_at'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('mensaje_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Mensaje';
  }

  public function getFields()
  {
    return array(
      'mensaje_id'      => 'Number',
      'destinatario_id' => 'ForeignKey',
      'remitente_id'    => 'ForeignKey',
      'anonimo'         => 'Number',
      'asunto'          => 'Text',
      'mensaje'         => 'Text',
      'send_at'         => 'Date',
      'created_at'      => 'Date',
    );
  }
}
