<?php

include(dirname(__FILE__).'/../../bootstrap/functional.php');

Doctrine::loadData(sfConfig::get('sf_test_dir').'/fixtures');

$browser = new sfTestFunctional(new sfBrowser());
#$browser->setTester('doctrine', 'sfTesterDoctrine');

$browser->
  get('domain.json')->
  with('request')->isFormat('json')->
  with('response')->begin()->

  end();

$browser->setTester('doctrine', 'sfTesterDoctrine');
$browser->
  call( 'domain/security',
        'put',
        array('concept_name' => 'prova',
              '_with_csrf' => true));