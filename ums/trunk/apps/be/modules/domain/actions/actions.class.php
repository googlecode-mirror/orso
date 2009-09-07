<?php

require_once dirname(__FILE__).'/../lib/domainGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/domainGeneratorHelper.class.php';

/**
 * domain actions.
 *
 * @package    ums
 * @subpackage domain
 * @author     Michele Orselli <michele.orselli@gmail.com>
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class domainActions extends autoDomainActions
{
    public function executeListNew(sfWebRequest $request)
  {
    $this->executeNew($request);
    $this->form->setDefault('parent_id', $request->getParameter('id'));
    $this->setTemplate('edit');
  }

}
