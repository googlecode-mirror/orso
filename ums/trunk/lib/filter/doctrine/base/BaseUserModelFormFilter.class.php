<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/doctrine/BaseFormFilterDoctrine.class.php');

/**
 * UserModel filter form base class.
 *
 * @package    filters
 * @subpackage UserModel *
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 11675 2008-09-19 15:21:38Z fabien $
 */
class BaseUserModelFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'concept_id'          => new sfWidgetFormDoctrineChoice(array('model' => 'DomainModel', 'add_empty' => true)),
      'user_id'             => new sfWidgetFormDoctrineChoice(array('model' => 'User', 'add_empty' => true)),
      'bloom_evaluation'    => new sfWidgetFormFilterInput(),
      'bloom_synthesis'     => new sfWidgetFormFilterInput(),
      'bloom_analysis'      => new sfWidgetFormFilterInput(),
      'bloom_application'   => new sfWidgetFormFilterInput(),
      'bloom_understanding' => new sfWidgetFormFilterInput(),
      'bloom_knowledge'     => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'concept_id'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => 'DomainModel', 'column' => 'id')),
      'user_id'             => new sfValidatorDoctrineChoice(array('required' => false, 'model' => 'User', 'column' => 'id')),
      'bloom_evaluation'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'bloom_synthesis'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'bloom_analysis'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'bloom_application'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'bloom_understanding' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'bloom_knowledge'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('user_model_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'UserModel';
  }

  public function getFields()
  {
    return array(
      'id'                  => 'Number',
      'concept_id'          => 'ForeignKey',
      'user_id'             => 'ForeignKey',
      'bloom_evaluation'    => 'Number',
      'bloom_synthesis'     => 'Number',
      'bloom_analysis'      => 'Number',
      'bloom_application'   => 'Number',
      'bloom_understanding' => 'Number',
      'bloom_knowledge'     => 'Number',
    );
  }
}