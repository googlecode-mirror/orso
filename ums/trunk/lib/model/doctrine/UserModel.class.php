<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class UserModel extends BaseUserModel
{
  public function getUsername()
  {
      return $this->User->username;
  }
}