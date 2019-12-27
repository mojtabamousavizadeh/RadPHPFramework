<?php
/**
 * Created by PhpStorm.
 * User: Mojtaba
 * Date: 17/07/2017
 * Time: 18:46
 */

namespace App\Login\Model;

use Libs\Database;

use Libs\Session;

class Login_Model
{

    function __construct()
    {
        echo "ok";
    }

    static function Login($data)
    {
        $RES="";
$User = $data['username'];
$Pass = $data['userpass'];
        $Login = Database::select("Select * from users where username = '$User' and password= '$Pass'");

        if (count($Login) != 0)
        {

//echo $Login[0]['user_id'];

            Session::Session_Start();
             Session::Set('Login',$Login[0]['id']);
            // $RES="<ChangeLocation>index ";
            //header('location: ../index');
            $RES = "<Success>     ورود موفقیت آمیز   " ;
  }
        else {

            $RES = "<Faild>  . رمز عبور یا نام کاربری اشتباه است ";
        }

        return $RES;

    }


    }
