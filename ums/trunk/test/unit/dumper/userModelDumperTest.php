<?php

include(dirname(__FILE__).'/../../bootstrap/unit.php');

$configuration = ProjectConfiguration::getApplicationConfiguration( 'fe', 'test', true);

new sfDatabaseManager($configuration);

Doctrine::loadData(sfConfig::get('sf_test_dir').'/fixtures');


$t = new lime_test(1, new lime_output_color());

$q = Doctrine_Query::create()
          ->select('d.concept_name, um.*')
          ->from('DomainModel d')
          ->leftJoin('d.Concept um')
          ->setHydrationMode(Doctrine::HYDRATE_ARRAY);

$treeObject = Doctrine::getTable('DomainModel')->getTree();
$treeObject->setBaseQuery($q);
$tree = $treeObject->fetchTree();
$treeObject->resetBaseQuery();

$t->comment('XML dumper');
$dumper = new userModelXMLDumper($tree);

$expectedXml = <<<EOF
<?xml version="1.0" ?><userModel><user>16</user><concept><name>Security</name><cog_levels><cog_level><name>evaluation</name><value>76</value></cog_level><cog_level><name>synthesis</name><value>21</value></cog_level><cog_level><name>analysis</name><value>96</value></cog_level><cog_level><name>application</name><value>41</value></cog_level><cog_level><name>understanding</name><value>26</value></cog_level><cog_level><name>knowledge</name><value>12</value></cog_level></cog_levels></concept><concept><name>Programming Language Tools For Security</name><cog_levels><cog_level><name>evaluation</name><value>23</value></cog_level><cog_level><name>synthesis</name><value>89</value></cog_level><cog_level><name>analysis</name><value>1</value></cog_level><cog_level><name>application</name><value>61</value></cog_level><cog_level><name>understanding</name><value>57</value></cog_level><cog_level><name>knowledge</name><value>44</value></cog_level></cog_levels></concept><concept><name>Java</name><cog_levels><cog_level><name>evaluation</name><value>83</value></cog_level><cog_level><name>synthesis</name><value>4</value></cog_level><cog_level><name>analysis</name><value>65</value></cog_level><cog_level><name>application</name><value>70</value></cog_level><cog_level><name>understanding</name><value>37</value></cog_level><cog_level><name>knowledge</name><value>11</value></cog_level></cog_levels></concept><concept><name>Security Platform</name><cog_levels><cog_level><name>evaluation</name><value>94</value></cog_level><cog_level><name>synthesis</name><value>55</value></cog_level><cog_level><name>analysis</name><value>5</value></cog_level><cog_level><name>application</name><value>91</value></cog_level><cog_level><name>understanding</name><value>16</value></cog_level><cog_level><name>knowledge</name><value>23</value></cog_level></cog_levels></concept><concept><name>Java Cryptography Extension</name><cog_levels><cog_level><name>evaluation</name><value>75</value></cog_level><cog_level><name>synthesis</name><value>1</value></cog_level><cog_level><name>analysis</name><value>36</value></cog_level><cog_level><name>application</name><value>18</value></cog_level><cog_level><name>understanding</name><value>2</value></cog_level><cog_level><name>knowledge</name><value>15</value></cog_level></cog_levels></concept></userModel>
EOF;

$t->is_deeply($dumper->dump(), $expectedXml, 'xml dump ok');
