<?php

/**
 * Created by PhpStorm.
 * User: Mojtaba
 * Date: 12/04/2016
 * Time: 23:55
 */
namespace Libs;


class Session
{
     static function Session_Start()
    {
        @session_start();
    }
     static function Set($key,$value)
    {
        $_SESSION[$key]=$value;
    }
     static function Get($key)
    {
        if(isset($_SESSION[$key])){
            return $_SESSION[$key];
        }
    }
     static function Destroy(){
        session_destroy();

    }

}