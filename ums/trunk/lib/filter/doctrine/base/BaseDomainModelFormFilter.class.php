<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/doctrine/BaseFormFilterDoctrine.class.php');

/**
 * DomainModel filter form base class.
 *
 * @package    filters
 * @subpackage DomainModel *
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 11675 2008-09-19 15:21:38Z fabien $
 */
class BaseDomainModelFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'concept_name' => new sfWidgetFormFilterInput(),
      'concept_slug' => new sfWidgetFormFilterInput(),
      'lft'          => new sfWidgetFormFilterInput(),
      'rgt'          => new sfWidgetFormFilterInput(),
      'level'        => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'concept_name' => new sfValidatorPass(array('required' => false)),
      'concept_slug' => new sfValidatorPass(array('required' => false)),
      'lft'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'rgt'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'level'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('domain_model_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'DomainModel';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'concept_name' => 'Text',
      'concept_slug' => 'Text',
      'lft'          => 'Number',
      'rgt'          => 'Number',
      'level'        => 'Number',
    );
  }
}