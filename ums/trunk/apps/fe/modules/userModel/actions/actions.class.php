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
    /*
    $q = Doctrine_Query::create()
          ->select('d.concept_name, um.*')
          ->from('DomainModel d')
          ->leftJoin('d.Concept um')
          ->where('User.id = um.user_id')
          ->andWhere('User.username = ?', $request->getParameter('username'))
          ->setHydrationMode(Doctrine::HYDRATE_ARRAY);

    if($request->hasParameter('concept_slug'))
    {
      $q->andWhere('d.concept_slug = ?', $request->getParameter('concept_slug') );
    }

      $treeObject = Doctrine::getTable('DomainModel')->getTree();
      $treeObject->setBaseQuery($q);
      $tree = $treeObject->fetchTree();
      $treeObject->resetBaseQuery();
*/
    $dumper = userModelDumperFactory::getDumperFor($request->getRequestFormat());
    $this->domain_dump = $dumper->dump($tree);
    
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $obj = $this->getRoute()->getObject();
    
    $this->obj = $obj;

    

  }

}
