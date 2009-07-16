<?php
/**
 * domainModelDumperInterface è l'intefaccia implementata dalle classi dumper
 *
 * @package    ums
 * @subpackage domainModel
 * @author     Michele Orselli <michele.orselli@gmail.com>
 * @version    SVN: $Id$
 */

class userModelHtmlDumper extends userModelDumper
{
  protected $result = '';

  public function dump($tree)
  {
    $this->tree = $tree;
      
    return $this->startHtml().$this->addUser().$this->addConcepts().$this->endXml();
  }

  protected function addUser()
  {
    $this->result .= '<p>User:'.$this->tree[0]['Concept'][0]['user_id'].'</p>';
  }

  protected function addConcepts()
  {

    foreach ($this->tree as $node) {
      if(isset($node['Concept'][0]))
      {
        $this->result .= '<div>';
        $this->result .= '<div>Name:'.$node['concept_name'];
        $this->result .= '<ul>';

        $this->result .= '<li>evaluation:'.$node['Concept'][0]['bloom_evaluation'].'</li>';
        $this->result .= '<value>'.($node['Concept'][0]['bloom_evaluation']).'</value>';
      $this->result .= '</cog_level>';

      $this->result .= '<cog_level>';
        $this->result .= '<name>synthesis</name>';
        $this->result .= '<value>'.$node['Concept'][0]['bloom_synthesis'].'</value>';
      $this->result .= '</cog_level>';

      $this->result .= '<cog_level>';
        $this->result .= '<name>analysis</name>';
        $this->result .= '<value>'.$node['Concept'][0]['bloom_analysis'].'</value>';
      $this->result .= '</cog_level>';

      $this->result .= '<cog_level>';
        $this->result .= '<name>application</name>';
        $this->result .= '<value>'.$node['Concept'][0]['bloom_application'].'</value>';
      $this->result .= '</cog_level>';

      $this->result .= '<cog_level>';
        $this->result .= '<name>understanding</name>';
        $this->result .= '<value>'.$node['Concept'][0]['bloom_understanding'].'</value>';
      $this->result .= '</cog_level>';

      $this->result .= '<cog_level>';
        $this->result .= '<name>knowledge</name>';
        $this->result .= '<value>'.$node['Concept'][0]['bloom_knowledge'].'</value>';
      $this->result .= '</cog_level>';

        $this->result .= '</cog_levels>';
        $this->result .= '</concept>';
    }
    }

    return $this->result;
  }

  protected function startXml()
  {
    return <<<EOF
<?xml version="1.0" ?>
<userModel>
EOF;
  }

  protected function endXml()
  {
    return "</userModel>";
  }

}
?>
