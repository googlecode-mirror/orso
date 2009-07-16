<?php
/**
 * domainModelDumperInterface è l'intefaccia implementata dalle classi dumper
 *
 * @package    ums
 * @subpackage domainModel
 * @author     Michele Orselli <michele.orselli@gmail.com>
 * @version    SVN: $Id$
 */

abstract class userModelDumper implements userModelDumperInterface
{
  protected $tree = array();

  public function __construct($tree = null)
  {
    $this->tree = $tree;
  }

  public function dump($tree)
  {
    throw new Exception('you must implement dump method', -1);
  }

}
?>
