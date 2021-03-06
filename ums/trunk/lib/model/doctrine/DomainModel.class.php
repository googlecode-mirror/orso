<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class DomainModel extends BaseDomainModel
{
    public function getParentId()
  {
    if (!$this->getNode()->isValidNode() || $this->getNode()->isRoot())
    {
      return null;
    }

    $parent = $this->getNode()->getParent();

    return $parent['id'];
  }

  public function getIndentedName()
  {
    return str_repeat('- ',$this['level']).$this['concept_name'];
  }

  public function getConceptNames()
  {
    print_r(Doctrine::getTable('DomainModel')->getConceptNames());
    return Doctrine::getTable('DomainModel')->getConceptNames();
  }

  public function __toString()
  {
      return $this['concept_name'];
  }
}