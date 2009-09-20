<?php

require_once dirname(__FILE__).'/../lib/userGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/userGeneratorHelper.class.php';

/**
 * user actions.
 *
 * @package    ums
 * @subpackage user
 * @author     Michele Orselli <michele.orselli@gmail.com>
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class userActions extends autoUserActions
{
  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $notice = $form->getObject()->isNew() ? 'The item was created successfully.' : 'The item was updated successfully.';

      $user = $form->save();

      Doctrine::getTable('DomainModel')->createUserModelByUser($user);

      $this->dispatcher->notify(new sfEvent($this, 'admin.save_object', array('object' => $user)));

      if ($request->hasParameter('_save_and_add'))
      {
        $this->getUser()->setFlash('notice', $notice.' You can add another one below.');

        $this->redirect('@user_user_new');
      }
      else
      {
        $this->getUser()->setFlash('notice', $notice);

        $this->redirect(array('sf_route' => 'user_user_edit', 'sf_subject' => $user));
      }
    }
    else
    {
      $this->getUser()->setFlash('error', 'The item has not been saved due to some errors.', false);
    }
  }

}
