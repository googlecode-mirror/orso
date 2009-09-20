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
        $this->hasColumn('email', 'string', 255, array('type' => 'string', 'unique' => true, 'length' => '255'));
    }

    public function setUp()
    {
        $this->hasMany('Group', array('refClass' => 'UserGroup',
                                      'local' => 'user_id',
                                      'foreign' => 'group_id',
                                      'onDelete' => 'CASCADE'));

        $this->hasMany('UserModel as User', array('local' => 'id',
                                                  'foreign' => 'user_id'));

        $this->hasMany('UserGroup', array('local' => 'id',
                                          'foreign' => 'user_id'));
    }
}