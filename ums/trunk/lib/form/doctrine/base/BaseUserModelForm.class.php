<?php

/**
 * UserModel form base class.
 *
 * @package    form
 * @subpackage user_model
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 8508 2008-04-17 17:39:15Z fabien $
 */
class BaseUserModelForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                  => new sfWidgetFormInputHidden(),
      'concept_id'          => new sfWidgetFormDoctrineChoice(array('model' => 'DomainModel', 'add_empty' => true)),
      'user_id'             => new sfWidgetFormDoctrineChoice(array('model' => 'User', 'add_empty' => true)),
      'bloom_evaluation'    => new sfWidgetFormInput(),
      'bloom_synthesis'     => new sfWidgetFormInput(),
      'bloom_analysis'      => new sfWidgetFormInput(),
      'bloom_application'   => new sfWidgetFormInput(),
      'bloom_understanding' => new sfWidgetFormInput(),
      'bloom_knowledge'     => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'id'                  => new sfValidatorDoctrineChoice(array('model' => 'UserModel', 'column' => 'id', 'required' => false)),
      'concept_id'          => new sfValidatorDoctrineChoice(array('model' => 'DomainModel', 'required' => false)),
      'user_id'             => new sfValidatorDoctrineChoice(array('model' => 'User', 'required' => false)),
      'bloom_evaluation'    => new sfValidatorInteger(array('required' => false)),
      'bloom_synthesis'     => new sfValidatorInteger(array('required' => false)),
      'bloom_analysis'      => new sfValidatorInteger(array('required' => false)),
      'bloom_application'   => new sfValidatorInteger(array('required' => false)),
      'bloom_understanding' => new sfValidatorInteger(array('required' => false)),
      'bloom_knowledge'     => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('user_model[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'UserModel';
  }

}
