<?php
/**
 * Created by PhpStorm.
 * User: Mojtaba
 * Date: 31/12/2016
 * Time: 18:58
 */

namespace Libs;

$GLOBALS['contentplace'] = array('url' => 'index');
class ContentPlaceHolder
{

    public static function get_content(){
        return $GLOBALS['contentplace']['url'];
    }

    public static function set_content($con){
        $GLOBALS['contentplace']['url'] =$con;

    }
}