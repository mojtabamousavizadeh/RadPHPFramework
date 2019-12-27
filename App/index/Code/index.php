<?php

/**

 * User: Mojtaba Mousavizadeh - Ahmad Ghanavati
 * Date: 26/05/2017
 * Time: 16:25
 */
use Libs\Auth;
use Libs\Session;
use Libs\View;

use App\index\Model\index_Model;


class index
{
    function __construct()
    {
//        check the Auth
//        Auth::CheckLogin();

        $url = $_GET['url'];
        $url_arr = explode('/', $url);
        //Load Template String
        require 'Functions/' . $url_arr[0] . '_Func.php';
        Set_Var("My_Ajax_Path", $url_arr[0] . '_AJAX.js');

        //Load View
        if (!isset($url_arr[1])) {
            View::render($url_arr[0]);

        } else {
            $test = $url_arr[1];
            self::$test();
        }


    }


    function Page_name()
    {
        return "Dashbord";
    }


    public function  Insert()
    {
       echo "Data";
    }






}








