<?php

/**
 * domain actions.
 *
 * @package    ums
 * @subpackage domain
 * @author     Michele Orselli <michele.orselli@gmail.com>
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class domainActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->domain_model_list = Doctrine::getTable('DomainModel')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->domain_model = Doctrine::getTable('DomainModel')->find(array($request->getParameter('concept_id')));
    $this->forward404Unless($this->domain_model);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new DomainModelForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post'));

    $this->form = new DomainModelForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($domain_model = Doctrine::getTable('DomainModel')->find(array($request->getParameter('concept_id'))), sprintf('Object domain_model does not exist (%s).', array($request->getParameter('concept_id'))));
    $this->form = new DomainModelForm($domain_model);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post') || $request->isMethod('put'));
    $this->forward404Unless($domain_model = Doctrine::getTable('DomainModel')->find(array($request->getParameter('concept_id'))), sprintf('Object domain_model does not exist (%s).', array($request->getParameter('concept_id'))));
    $this->form = new DomainModelForm($domain_model);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($domain_model = Doctrine::getTable('DomainModel')->find(array($request->getParameter('concept_id'))), sprintf('Object domain_model does not exist (%s).', array($request->getParameter('concept_id'))));
    $domain_model->delete();

    $this->redirect('domain/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()));
    if ($form->isValid())
    {
      $domain_model = $form->save();

      $this->redirect('domain/edit?concept_id='.$domain_model->getConceptId());
    }
  }
}