<?php

/**
 * Created by PhpStorm.
 * User: MojtabaMousavizadeh
 * Date: 07/02/2016
 * Time: 11:48 PM
 */
use Lib\Controller;

global $Controller;

class Router
{
    function __construct()
    {

        if ((!isset($_GET['url'])) || ($_GET['url'] == "")) {
            $_GET['url'] = 'index';

        }

        $url = $_GET['url'];
        $url_arr = explode('/', $url);

        if ($url_arr[0] == "index.php") {
            $url_arr[0] = "index";

            return false;
        }
        $Folder_Name = explode('.', $url_arr[0]);








        //If Requested File is a Module Then
        //Module
        if ($Folder_Name[0] == "Modules") {
            $Module_ext = explode('_', $url_arr[4]);;
            $master_Path = 'App/Master/Code/Master.php';
            $file_Path = 'Modules/' . $Module_ext[1] . '/Codes/' . $Module_ext[0] . '/Code/' . $url_arr[4] . '.php';
            $model_Path = 'Modules/' . $Module_ext[1] . '/Codes/' . $Module_ext[0] . '/Model/' . $url_arr[4] . '_Model.php';

            if (file_exists($file_Path) && file_exists($master_Path)) {
                require $file_Path;
                require $master_Path;


                if (file_exists($model_Path)) {
                    require $model_Path;
                }

                //Master Page
                $Master = new Master();

                //Controller Builder
                $Controller = new $url_arr[4];

            } else {
                $file_Path_error = 'App/Errors/Code/Errors.php';
                require $file_Path_error;
                $Controller = new Error();
                $Controller->Start();
                return false;
            }
            if (!empty($url_arr[5])) {
                if (method_exists($Controller, $url_arr[5])) {
                    if (isset($url_arr[6])) {
                        $Controller->$url_arr[5]($url_arr[6]);
                    } else {
                        $Controller->$url_arr[5]();
                    }
                } else {
                    echo 'Method Not Exist';
                }
            }
        }






        //If Requested File is a Basic Page Then
        //Normal
        else {

            $master_Path = 'App/Master/Code/Master.php';
            $file_Path = 'App/' . $Folder_Name[0] . '/Code/' . $Folder_Name[0] . '.php';
            $model_Path = 'App/' . $Folder_Name[0] . '/Model/' . $Folder_Name[0] . '_Model.php';
            if (file_exists($file_Path)) {
                require $master_Path;
                require $file_Path;

                if (file_exists($model_Path)) {
                    require $model_Path;
                }

                //Master Page
                $Master = new Master();

                //Controller Builder
                $Controller = new $url_arr[0];


            } else {
                $file_Path_error = 'App/Errors/Code/Errors.php';
                include $file_Path_error;
                $Controller = new Errors();
                header('location:Errors');
                return false;
            }

            if (!empty($url_arr[1])) {
                if (method_exists($Controller, $url_arr[1])) {
                    if (isset($url_arr[2])) {
                        $Controller->$url_arr[1]($url_arr[2]);

                    }
                } else {
                    echo 'Method Not Exist';
                }
            }
        }


    }


}
