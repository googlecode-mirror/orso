<?php
/**
 * domainModelDumperInterface è l'intefaccia implementata dalle classi dumper
 *
 * @package    ums
 * @subpackage domainModel
 * @author     Michele Orselli <michele.orselli@gmail.com>
 * @version    SVN: $Id$
 */

class domainModelJsonDumper extends domainModelDumper
{
  protected $result = '';

  public function dump()
  {
    return $this->addConcepts();
  }

  protected function addConcepts()
  {
    $this->result .= $this->addConcept($this->tree);

    return $this->result;
  }

  protected function addConcept($node)
  {
    $this->result .= sprintf('{"name":"%s", "slug":"%s", "children": [', $node['concept_name'], $node['concept_slug']);

    if($node->getNode()->isLeaf())
    {
      $this->result .= '{}]}';
      $this->result .= $node->getNode()->hasNextSibling() ? ',' : ']';
      return;
    }

    foreach($node->getNode()->getChildren() as $concept)
    {
      $this->addConcept($concept);
    }

    $this->result .= '}';
    if(!$node->getNode()->isRoot())
    {
        $this->result .= $node->getNode()->hasNextSibling() ? ',' : ']';
    }
  }

  protected function startJson()
  {
    return '{';
  }

  protected function endJson()
  {
    return '}';
  }

}
?>
