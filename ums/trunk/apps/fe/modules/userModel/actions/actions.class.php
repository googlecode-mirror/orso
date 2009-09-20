<?php

/**
 * user actions.
 *
 * @package    ums
 * @subpackage user
 * @author     Michele Orselli <michele.orselli@gmail.com>
 * @version    SVN: $Id: actions.class.php 12479 2008-10-31 10:54:40Z fabien $
 */
class userModelActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $tree = Doctrine::getTable('DomainModel')
             ->getUserModelByUsername($request->getParameter('username'), true);
    
    $dumper = userModelDumperFactory::getDumperFor($request->getRequestFormat());
    $this->domain_dump = $dumper->dump($tree);
    
  }

 

  public function executeShow(sfWebRequest $request)
  {
    $q = Doctrine_Query::create()
          ->select('d.concept_name, um.*')
          ->from('DomainModel d')
          ->leftJoin('d.Concept um')
          ->where('d.concept_slug = ?', $request->getParameter('concept_slug'))
          ->andWhere('User.id = um.user_id')
          ->andWhere('User.username = ?', $request->getParameter('username'))
          ->setHydrationMode(Doctrine::HYDRATE_ARRAY);

   $domain_model = $q->execute();

   $dumper = userModelDumperFactory::getDumperFor($request->getRequestFormat());
   $this->domain_dump = $dumper->dump($domain_model);

  }

  public function executeUpdate(sfWebRequest $request)
  {
    $q = Doctrine_Query::create()
          ->select('d.concept_name, um.*')
          ->from('UserModel um')
          ->leftJoin('um.DomainModel d')
          ->where('d.concept_slug = ?', $request->getParameter('concept_slug'))
          ->andWhere('User.id = um.user_id')
          ->andWhere('User.username = ?', $request->getParameter('username'));

   $domain_model = $q->fetchOne();
    
    $domain_model->bloom_evaluation     = $request->hasParameter('bloom_evaluation') ? $request->getParameter('bloom_evaluation') : $domain_model->bloom_evaluation;
    $domain_model->bloom_analysis       = $request->hasParameter('bloom_analysis') ? $request->getParameter('bloom_analysis') : $domain_model->bloom_analysis;
    $domain_model->bloom_synthesis      = $request->hasParameter('bloom_synthesis') ? $request->getParameter('bloom_synthesis') : $domain_model->bloom_synthesis;
    $domain_model->bloom_application    = $request->hasParameter('bloom_application') ? $request->getParameter('bloom_application') : $domain_model->bloom_application;
    $domain_model->bloom_understanding  = $request->hasParameter('bloom_understanding') ? $request->getParameter('bloom_understanding') : $domain_model->bloom_understanding;
    $domain_model->bloom_knowledge      = $request->hasParameter('bloom_knowledge') ? $request->getParameter('bloom_knowledge') : $domain_model->bloom_knowledge;

    $domain_model->save();

    $this->domain_model = $domain_model;

  }

}
