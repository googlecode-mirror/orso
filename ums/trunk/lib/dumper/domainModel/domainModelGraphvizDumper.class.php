<?php
/**
 * domainModelDumperInterface è l'intefaccia implementata dalle classi dumper
 *
 * @package    ums
 * @subpackage domainModel
 * @author     Michele Orselli <michele.orselli@gmail.com>
 * @version    SVN: $Id$
 */

class domainModelGraphvizDumper extends domainModelDumper
{
  private $result = '';

  private $options = array(
      'graph' => array('ratio' => 'compress', 'rankdir' => 'LR'),
      'node'  => array('fontsize' => 11, 'fontname' => 'Arial'),
      'edge'  => array('fontsize' => 9, 'fontname' => 'Arial', 'color' => 'grey', 'arrowhead' => 'open', 'arrowsize' => 0.5),
      'node.instance' => array('fillcolor' => '#9999ff', 'style' => 'filled'),
      'node.definition' => array('fillcolor' => '#eeeeee'),
      'node.missing' => array('fillcolor' => '#ff9999', 'style' => 'filled'),
    );


  public function dump()
  {
    return $this->startDot().$this->addNodes().$this->endDot();

  }

  protected function startDot()
  {
    return sprintf("digraph sc {  %s  node [%s];  edge [%s];",
      $this->addOptions($this->options['graph']),
      $this->addOptions($this->options['node']),
      $this->addOptions($this->options['edge'])
    );
  }

  protected function endDot()
  {
    return "}";
  }

  protected function addNodes()
  {
    
    $this->result .= $this->addNode($this->tree);

    return $this->result;
  }

  protected function addNode($node)
  {
    $this->result .= sprintf("  node_%s [label=\"%s\" \"%s\"];", $node['concept_slug'], $node['concept_slug'], $node['concept_name']);

    if($node->getNode()->isLeaf())
    {
      return;
    }

    foreach($node->getNode()->getChildren() as $concept)
    {
      $this->result .= sprintf("  node_%s -> node_%s [label=\"%s\" style=\"%s\"];", $node['concept_slug'], $node['concept_slug'], '', 'filled');
      $this->addNode($concept);
    }
  }

  
  protected function addAttributes($attributes)
  {
    $code = array();
    foreach ($attributes as $k => $v)
    {
      $code[] = sprintf('%s="%s"', $k, $v);
    }

    return $code ? ', '.implode(', ', $code) : '';
  }

  protected function addOptions($options)
  {
    $code = array();
    foreach ($options as $k => $v)
    {
      $code[] = sprintf('%s="%s"', $k, $v);
    }

    return implode(' ', $code);
  }


}
?>
