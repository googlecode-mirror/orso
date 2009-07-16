<?php
/**
 * domainModelDumperInterface è l'intefaccia implementata dalle classi dumper
 *
 * @package    ums
 * @subpackage domainModel
 * @author     Michele Orselli <michele.orselli@gmail.com>
 * @version    SVN: $Id$
 */

class domainModelRdfDumper extends domainModelDumper
{
  protected $result = '';

  public function dump()
  {
    return $this->startRdf().$this->addConcepts();
  }

  protected function addConcepts()
  {
    $this->result .= $this->addConcept($this->tree);

    return $this->result;
  }

  protected function addConcept($node)
  {
      <rdfs:Class rdf:about="&rdf_;AES"
	 rdfs:label="AES">
	<rdfs:subClassOf rdf:resource="&rdf_;Block_Cipher"/>
</rdfs:Class>

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

  protected function startRdf()
  {
    return <<< EOF
<?xml version='1.0' encoding='UTF-8'?>
<!DOCTYPE rdf:RDF [
	 <!ENTITY rdf 'http://www.w3.org/1999/02/22-rdf-syntax-ns#'>
	 <!ENTITY rdf_ 'http://protege.stanford.edu/rdf'>
	 <!ENTITY rdfs 'http://www.w3.org/2000/01/rdf-schema#'>
]>
<rdf:RDF xmlns:rdf="&rdf;"
	 xmlns:rdf_="&rdf_;"
	 xmlns:rdfs="&rdfs;">
EOF;
  }

  protected function endJson()
  {
    return '}';
  }

}
?>
