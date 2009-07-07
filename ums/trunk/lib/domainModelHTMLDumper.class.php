<?php
/**
 * domainModelDumperInterface è l'intefaccia implementata dalle classi dumper
 *
 * @package    ums
 * @subpackage domainModel
 * @author     Michele Orselli <michele.orselli@gmail.com>
 * @version    SVN: $Id$
 */

class domainModelHTMLDumper extends domainModelDumper
{
  private $result = '';

  public function dump()
  {
    return $this->startHTML().$this->addConcepts().$this->endHTML();
  }

  protected function addConcepts()
  {
    $this->result .= $this->addConcept($this->tree);

    return $this->result;
  }

  protected function addConcept($node)
  {
    $this->result .= '<li>'.$node['concept_name'].'</li>';
    if($node->getNode()->isLeaf())
    {
      return;
    }

    $this->result .= '<ul>';
    foreach($node->getNode()->getChildren() as $concept)
    {
      $this->addConcept($concept);
    }
    $this->result .= '</ul>';
  }

  protected function startHTML()
  {
    return '<ul>';
  }

  protected function endHTML()
  {
    return '</ul>';
  }
}
?>
