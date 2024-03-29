<?php

/**
 * MedicalRevision form base class.
 *
 * @method MedicalRevision getObject() Returns the current form's model object
 *
 * @package    sf_sandbox
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseMedicalRevisionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'        => new sfWidgetFormInputHidden(),
      'client_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Client'), 'add_empty' => true)),
      'date'      => new sfWidgetFormDate(),
      'passed'    => new sfWidgetFormInputCheckbox(),
      'comments'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'        => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'client_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Client'), 'required' => false)),
      'date'      => new sfValidatorDate(),
      'passed'    => new sfValidatorBoolean(array('required' => false)),
      'comments'  => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('medical_revision[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MedicalRevision';
  }

}
