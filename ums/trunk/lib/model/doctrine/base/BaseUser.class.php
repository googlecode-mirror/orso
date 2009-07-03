<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
abstract class BaseUser extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('user');
        $this->hasColumn('username', 'string', 255, array('type' => 'string', 'notnull' => true, 'unique' => true, 'length' => '255'));
    }

    public function setUp()
    {
        $this->hasOne('UserModel', array('local' => 'id',
                                         'foreign' => 'user_id'));
    }
}