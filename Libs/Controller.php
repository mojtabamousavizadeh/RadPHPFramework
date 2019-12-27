<?php

/**
 * Created by PhpStorm.
 * User: MojtabaMousavizadeh
 * Date: 13/02/2016
 * Time: 07:06 PM
 */
namespace Libs;


class Controller
{
    /**
     * Controller constructor.
     */
    function __construct()
    {
        //$this->View = new View();
    }

    public function Load_Model($file)
    {

        $path = 'Models/' . $file . '_Model.php';

        if (file_exists($path)) {

            require $path;

            $modelname = $file . '_Model';

            $this->Model = new $modelname();

            $this->PageName = $file;
        }
    }





}