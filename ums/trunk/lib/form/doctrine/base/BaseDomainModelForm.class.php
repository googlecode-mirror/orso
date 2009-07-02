<?php

/**
 * DomainModel form base class.
 *
 * @package    form
 * @subpackage domain_model
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 8508 2008-04-17 17:39:15Z fabien $
 */
class BaseDomainModelForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'concept_name' => new sfWidgetFormInput(),
      'concept_slug' => new sfWidgetFormInput(),
      'lft'          => new sfWidgetFormInput(),
      'rgt'          => new sfWidgetFormInput(),
      'level'        => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorDoctrineChoice(array('model' => 'DomainModel', 'column' => 'id', 'required' => false)),
      'concept_name' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'concept_slug' => new sfValidatorString(array('max_length' => 255)),
      'lft'          => new sfValidatorInteger(array('required' => false)),
      'rgt'          => new sfValidatorInteger(array('required' => false)),
      'level'        => new sfValidatorInteger(array('required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'DomainModel', 'column' => array('concept_slug')))
    );

    $this->widgetSchema->setNameFormat('domain_model[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'DomainModel';
  }

}
