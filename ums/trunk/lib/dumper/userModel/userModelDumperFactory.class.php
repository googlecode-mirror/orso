<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of userModelDumperFactoryclass
 *
 * @author orso
 */
class userModelDumperFactory {

    public static function getDumperFor($format)
    {
        $dumper = '';
        switch($format)
        {
          case 'xml':
            $dumper = new userModelXMLDumper();
            break;
          case 'html':
            $dumper = new userModelHtmlDumper();
            break;
          default:
            $dumper = null;
        }
        return $dumper;
    }
}
?>
