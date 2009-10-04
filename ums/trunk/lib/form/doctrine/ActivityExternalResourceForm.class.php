<?php
/**
 * Activity form.
 *
 * @package    form
 * @subpackage Activity
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 6174 2007-11-27 06:22:40Z fabien $
 */
class ActivityExternalResourceForm extends ActivityForm
{
  public function configure()
  {
    parent::configure();
    $filename = $this->getObject()->getData();
    $this->widgetSchema['resource_uri'] = new sfWidgetFormInputFileEditable(array(
      'label'     => 'File',
      'file_src'  => '/uploads/materiale/'.$filename['resource_uri'],
      'is_image'  => false,
      'edit_mode' => !$this->isNew(),
    ));

    $this->validatorSchema['resource_uri_delete'] = new sfValidatorPass();
    $this->validatorSchema['resource_uri'] = new sfValidatorFile(array(
        'required'   => false,
        'path'       => sfConfig::get('sf_upload_dir').'/materiale',
    ));

  }

}