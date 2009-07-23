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
      'id'            => new sfWidgetFormInputHidden(),
      'concept_name'  => new sfWidgetFormInput(),
      'lft'           => new sfWidgetFormInput(),
      'rgt'           => new sfWidgetFormInput(),
      'level'         => new sfWidgetFormInput(),
      'concept_slug'  => new sfWidgetFormInput(),
      'activity_list' => new sfWidgetFormDoctrineChoiceMany(array('model' => 'Activity')),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorDoctrineChoice(array('model' => 'DomainModel', 'column' => 'id', 'required' => false)),
      'concept_name'  => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'lft'           => new sfValidatorInteger(array('required' => false)),
      'rgt'           => new sfValidatorInteger(array('required' => false)),
      'level'         => new sfValidatorInteger(array('required' => false)),
      'concept_slug'  => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'activity_list' => new sfValidatorDoctrineChoiceMany(array('model' => 'Activity', 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'DomainModel', 'column' => array('slug')))
    );

    $this->widgetSchema->setNameFormat('domain_model[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'DomainModel';
  }

  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['activity_list']))
    {
      $this->setDefault('activity_list', $this->object->Activity->getPrimaryKeys());
    }

  }

  protected function doSave($con = null)
  {
    parent::doSave($con);

    $this->saveActivityList($con);
  }

  public function saveActivityList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['activity_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (is_null($con))
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->Activity->getPrimaryKeys();
    $values = $this->getValue('activity_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('Activity', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('Activity', array_values($link));
    }
  }

}
