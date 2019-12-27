<?php

/**
 * Created by PhpStorm.
 * User: Mojtaba
 * Date: 13/11/2016
 * Time: 19:45
 */
namespace  Libs;
use Libs\Session;

class Auth
{
    public static function CheckLogin()
    {

   Session::Session_Start();
       $Login = Session::Get('Login');

       if($Login==false) {
            Session::Destroy();
           //header("location:Login");
           $uri = $_SERVER['REQUEST_URI'];
           if ($uri != "/Login"
            && $uri!="/Login/Login"){
               header("location:Login");
            }
      }

    }
}