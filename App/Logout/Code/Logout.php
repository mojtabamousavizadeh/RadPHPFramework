<?php
/**
 * Created by PhpStorm.
 * User: Mojtaba
 * Date: 05/11/2017
 * Time: 11:12
 */

use Libs\Session;
class Logout
{
    function __construct()
    {
         session_destroy();
        header('Location: Login' );

    }
}