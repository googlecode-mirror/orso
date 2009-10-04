<?php

function url_for_activity_resource($activity)
{
  $uri_prefix = '';
  $request = sfContext::getInstance()->getRequest();

  if ($activity->isResourceLocal() && $activity->getResourceUri() != '')
  {
   $uri_prefix = 'http://'.$request->getHost().'/uploads/materiale/';
  }

  return $uri_prefix.$activity->getResourceUri();
}

?>
