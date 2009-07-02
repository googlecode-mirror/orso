<?xml version="1.0" encoding="utf-8"?>
<domain>
  
    <?php
    function print_tree_recursive($node)
    {
      print '<concept name="'.$node['concept_name'].'" id="'.$node['concept_slug'].'">';

      if($node->getNode()->isLeaf())
      {
        print '</concept>';
        return;
      }

      foreach($node->getNode()->getChildren() as $concept)
      {
        print_tree_recursive($concept);
      }

      print '</concept>';
    }

    $treeObject = Doctrine::getTable('DomainModel')->getTree();
$tree = $treeObject->fetchRoot();
$a = array();
print_tree_recursive($tree);
?>
</domain>
