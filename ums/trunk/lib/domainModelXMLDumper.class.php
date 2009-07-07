<?php
/**
 * domainModelDumperInterface è l'intefaccia implementata dalle classi dumper
 *
 * @package    ums
 * @subpackage domainModel
 * @author     Michele Orselli <michele.orselli@gmail.com>
 * @version    SVN: $Id$
 */

class domainModelXMLDumper extends domainModelDumper
{
  private $result = '';

  public function dump()
  {
    return $this->startXml().$this->addConcepts().$this->endXml();
  }

  protected function addConcepts()
  {
    $this->result .= $this->addConcept($this->tree);

    return $this->result;
  }

  protected function addConcept($node)
  {
    $this->result .= '<concept name="'.$node['concept_name'].'" slug="'.$node['slug'].'">';
    if($node->getNode()->isLeaf())
    {
      $this->result .= '</concept>';
      return;
    }

    foreach($node->getNode()->getChildren() as $concept)
    {
      $this->addConcept($concept);
    }

    $this->result .= '</concept>';
  }

  protected function startXml()
  {
    return <<<EOF
<?xml version="1.0" ?>
<domainModel>
EOF;
  }

  protected function endXml()
  {
    return "</domainModel>";
  }

}
?>
