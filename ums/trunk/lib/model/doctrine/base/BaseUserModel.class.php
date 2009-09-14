<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
abstract class BaseUserModel extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('user_model');
        $this->hasColumn('concept_id', 'integer', null, array('type' => 'integer'));
        $this->hasColumn('user_id', 'integer', null, array('type' => 'integer'));
        $this->hasColumn('bloom_evaluation', 'float', null, array('type' => 'float'));
        $this->hasColumn('bloom_synthesis', 'float', null, array('type' => 'float'));
        $this->hasColumn('bloom_analysis', 'float', null, array('type' => 'float'));
        $this->hasColumn('bloom_application', 'float', null, array('type' => 'float'));
        $this->hasColumn('bloom_understanding', 'float', null, array('type' => 'float'));
        $this->hasColumn('bloom_knowledge', 'float', null, array('type' => 'float'));
    }

    public function setUp()
    {
        $this->hasOne('DomainModel', array('local' => 'concept_id',
                                           'foreign' => 'id',
                                           'onDelete' => 'CASCADE'));

        $this->hasOne('User', array('local' => 'user_id',
                                    'foreign' => 'id',
                                    'onDelete' => 'CASCADE'));
    }
}