<?php

include(dirname(__FILE__).'/../../bootstrap/functional.php');

Doctrine::loadData(sfConfig::get('sf_data_dir').'/fixtures');

$browser = new sfTestFunctional(new sfBrowser());
$browser->setTester('doctrine', 'sfTesterDoctrine');

$browser->
  call( 'usermodel/1/concept/200.html',
        'put',
        array('bloom_evaluation' => 0,
              'concept_id' => 200,
              '_with_csrf' => true))->

 with('doctrine')->begin()->
  check('UserModel', array(
    'bloom_evaluation'     => 0,
    'concept_id'  => 200
  ))->
end()

 


;
