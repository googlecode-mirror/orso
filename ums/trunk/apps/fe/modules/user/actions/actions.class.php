<?php

/**
 * user actions.
 *
 * @package    ums
 * @subpackage user
 * @author     Michele Orselli <michele.orselli@gmail.com>
 * @version    SVN: $Id: actions.class.php 12479 2008-10-31 10:54:40Z fabien $
 */
class userActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */

    function nestify( $flat_array, $depth_key = 'depth' )
    {
      foreach ($flat_array as $flat_array_element) {
      ;
      }
    }
/*
   2. {
   3.     $nested = array();
   4.     $depths = array();
   5.
   6.     foreach( $arrs as $key => $arr ) {
   7.         if( $arr[$depth_key] == 0 ) {
   8.             $nested[$key] = $arr;
   9.             $depths[$arr[$depth_key] + 1] = $key;
  10.         }
  11.         else {
  12.             $parent =& $nested;
  13.             for( $i = 1; $i <= ( $arr[$depth_key] ); $i++ ) {
  14.                 $parent =& $parent[$depths[$i]];
  15.             }
  16.
  17.             $parent[$key] = $arr;
  18.             $depths[$arr[$depth_key] + 1] = $key;
  19.         }
  20.     }
  21.
  22.     return $nested;
  23. }*/

  public function executeIndex(sfWebRequest $request)
  {
    $q = Doctrine_Query::create()
          ->select('d.concept_name, um.*')
          ->from('DomainModel d')
          ->leftJoin('d.Concept um');
          #->setHydrationMode(Doctrine::HYDRATE_ARRAY);


      $treeObject = Doctrine::getTable('DomainModel')->getTree();
      $treeObject->setBaseQuery($q);
      $tree = $treeObject->fetchRoot();
      $treeObject->resetBaseQuery();

    
      $visitor = new DomainModelArrayVisitor();
      
      $tree->accept($visitor);

      print_r($visitor->a);
 

  }


}
