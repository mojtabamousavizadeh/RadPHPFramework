<?php

/**
 * Created by PhpStorm.
 * User: Mojtaba
 * Date: 17/07/2017
 * Time: 18:46
 */
use  Libs\View;
use App\Login\Model\Login_Model;
use Libs\Auth;
use Libs\Session;
class Login
{
    function __construct()
    {


        $url = $_GET['url'];
        $url_arr = explode('/', $url);
        //Load Template String
        require 'Functions/' . $url_arr[0] . '_Func.php';
        Set_Var("My_Ajax_Path", $url_arr[0] . '_AJAX.js');




        //Load View
        if (!isset($url_arr[1])) {
            View::render($url_arr[0],'true');
        }
        else {
            $test = $url_arr[1];
            self::$test();

        }



    }

    // function session_check()
    // {
    //     Auth::CheckLogin();
    //     if(Session::Get('Login')){
    //         echo "full";
    //     }else
    //     {
    //         echo "full";
    //     }
    // }


    function Login()
    {


        if (isset($_POST["myData"])) {

            $obj = json_decode($_POST["myData"]);

            $data = array();
            $data['username']=$obj->Username;
            $data['userpass']=$obj->Password;

            echo Login_Model::Login($data);
        }
    }





}
