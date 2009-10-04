<?php
/**
 * Activity form.
 *
 * @package    form
 * @subpackage Activity
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 6174 2007-11-27 06:22:40Z fabien $
 */
class ActivityFormFactory
{
  public static function getByResourceType($resource_type)
  {
    switch($resource_type)
    {
      case 'external':
        return new ActivityExternalResourceForm();
        break;
      default:
        return new ActivityForm();
    }

  }

}