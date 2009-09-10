<?php

/**
 * Activity filter form.
 *
 * @package    filters
 * @subpackage Activity *
 * @version    SVN: $Id: sfDoctrineFormFilterTemplate.php 11675 2008-09-19 15:21:38Z fabien $
 */
class ActivityFormFilter extends BaseActivityFormFilter
{
//  public function configure()
//  {
//    $this->setWidgets(array(
//      'name'              => new sfWidgetFormFilterInput(),
//      'type'              => new sfWidgetFormChoice(array('choices' => array('' => '', 'reading' => 'reading'))),
//      'data'              => new sfWidgetFormFilterInput(),
//      'domain_model_list' => new sfWidgetFormDoctrineChoiceMany(array('model' => 'DomainModel', 'key_method' => 'getIndentedName')),
//    ));
//
//    $this->setValidators(array(
//      'name'              => new sfValidatorPass(array('required' => false)),
//      'type'              => new sfValidatorChoice(array('required' => false, 'choices' => array('reading' => 'reading'))),
//      'data'              => new sfValidatorPass(array('required' => false)),
//      'domain_model_list' => new sfValidatorDoctrineChoiceMany(array('model' => 'DomainModel', 'required' => false, 'column' => 'concept_name')),
//    ));
//
//    $this->widgetSchema->setNameFormat('activity_filters[%s]');
//
//    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
//
//  }
}