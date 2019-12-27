<?php
/**
 * Created by PhpStorm.
 * User: Mojtaba
 * Date: 01/01/2017
 * Time: 16:27
 */

$array_variable = array();
$Module_variable = array();

function Set_Var($index,$value)
{
    global $array_variable;
    $array_variable["$index"]=$value;
}
 function Set_Module_Var($index , $value)
 {
     global $Module_variable;
     $Module_variable ["$index"]=$value;
 }