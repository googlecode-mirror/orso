<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class ActivityConcept extends BaseActivityConcept
{
    public function getActivityName()
    {
        return $this->Activity->name;
    }

    public function getConceptName() {
        return $this->DomainModel->concept_name;
    }
}