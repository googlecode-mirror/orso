<?php

include(dirname(__FILE__).'/../../bootstrap/unit.php');

$configuration = ProjectConfiguration::getApplicationConfiguration( 'fe', 'test', true);

new sfDatabaseManager($configuration);

Doctrine::loadData(sfConfig::get('sf_test_dir').'/fixtures');


$t = new lime_test(4, new lime_output_color());



$treeObject = Doctrine::getTable('DomainModel')->getTree();
$tree = $treeObject->fetchRoot();

$t->comment('HTML dumper');
$dumper = new domainModelHTMLDumper($tree);

$expectedHtml = <<<EOF
<ul><li>Security</li><ul><li>Programming Language Tools For Security</li><ul><li>Java</li><ul><li>Security Platform</li><li>Java Cryptography Extension</li><li>Security Provider</li></ul></ul></ul></ul>
EOF;

$t->is_deeply($dumper->dump(), $expectedHtml, 'html dump ok');

$t->comment('XML dumper');
$dumper = new domainModelXMLDumper($tree);

$expectedXml = <<<EOF
<?xml version="1.0" ?>
<domainModel><concept name="Security" slug="security"><concept name="Programming Language Tools For Security" slug="programming-language-tools-for-security"><concept name="Java" slug="java"><concept name="Security Platform" slug="security-platform"></concept><concept name="Java Cryptography Extension" slug="java-cryptography-extension"></concept><concept name="Security Provider" slug="security-provider"></concept></concept></concept></concept></domainModel>
EOF;

$t->is_deeply($dumper->dump(), $expectedXml, 'xml dump ok');

$t->comment('XML dumper');
$dumper = new domainModelJsonDumper($tree);

$expectedJson = <<<EOF
{"name":"Security", "slug":"security", "children": [{"name":"Programming Language Tools For Security", "slug":"programming-language-tools-for-security", "children": [{"name":"Java", "slug":"java", "children": [{"name":"Security Platform", "slug":"security-platform", "children": [{}]},{"name":"Java Cryptography Extension", "slug":"java-cryptography-extension", "children": [{}]},{"name":"Security Provider", "slug":"security-provider", "children": [{}]}]}]}]}
EOF;

$t->is_deeply($dumper->dump(), $expectedJson, 'json dump ok');

$t->comment('Graphviz dumper');
$dumper = new domainModelGraphvizDumper($tree);

$expectedGraphviz = <<<EOF
digraph sc {  ratio="compress" rankdir="LR"  node [fontsize="11" fontname="Arial"];  edge [fontsize="9" fontname="Arial" color="grey" arrowhead="open" arrowsize="0.5"];  node_security [label="security" "Security"];  node_security -> node_security [label="" style="filled"];  node_programming-language-tools-for-security [label="programming-language-tools-for-security" "Programming Language Tools For Security"];  node_programming-language-tools-for-security -> node_programming-language-tools-for-security [label="" style="filled"];  node_java [label="java" "Java"];  node_java -> node_java [label="" style="filled"];  node_security-platform [label="security-platform" "Security Platform"];  node_java -> node_java [label="" style="filled"];  node_java-cryptography-extension [label="java-cryptography-extension" "Java Cryptography Extension"];  node_java -> node_java [label="" style="filled"];  node_security-provider [label="security-provider" "Security Provider"];}
EOF;

$t->is($dumper->dump(), $expectedGraphviz, 'json dump ok');