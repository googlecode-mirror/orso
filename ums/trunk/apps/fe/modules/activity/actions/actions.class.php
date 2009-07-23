<?php

/**
 * activity actions.
 *
 * @package    ums
 * @subpackage activity
 * @author     Michele Orselli <michele.orselli@gmail.com>
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class activityActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->activity_list = Doctrine::getTable('Activity')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new ActivityForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post'));

    $this->form = new ActivityForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($activity = Doctrine::getTable('Activity')->find(array($request->getParameter('id'))), sprintf('Object activity does not exist (%s).', array($request->getParameter('id'))));
    $this->form = new ActivityForm($activity);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post') || $request->isMethod('put'));
    $this->forward404Unless($activity = Doctrine::getTable('Activity')->find(array($request->getParameter('id'))), sprintf('Object activity does not exist (%s).', array($request->getParameter('id'))));
    $this->form = new ActivityForm($activity);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($activity = Doctrine::getTable('Activity')->find(array($request->getParameter('id'))), sprintf('Object activity does not exist (%s).', array($request->getParameter('id'))));
    $activity->delete();

    $this->redirect('activity/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()));
    if ($form->isValid())
    {
      $activity = $form->save();

      $this->redirect('activity/edit?id='.$activity->getId());
    }
  }
}
