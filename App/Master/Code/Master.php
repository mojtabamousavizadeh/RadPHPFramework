<?php

/**
 * Created by PhpStorm.
 * User: Mojtaba
 * Date: 09/01/2017
 * Time: 20:11
 */

use Libs\Database;
use Libs\Session;
use Libs\Auth;

class Master
{
    function __construct()
    {
//        self::GetMenu();
        //error_reporting(0);
        Auth::CheckLogin();
        //Load Template String
        require 'Functions/Master_Func.php';



    }
    function User()
    {
        Auth::CheckLogin();
        $user = Session::Get('Login');

        return $user;
    }
    function Users()
    {
        $user = Session::Get('Login');
        return self::GetUses($user);
    }

    function GetexaminationID($User)
    {
        $url = $_GET['url'];
        if($url!='Login') {
            $Sql = Database::select("SELECT * FROM users where  id ='$User'");
            $ID = $Sql[0]['examination_Center_ID'];
            return $ID;
        }
    }

    function CompanyName()
    {
        $url = $_GET['url'];
        if($url!='Login') {
            $user = Session::Get('Login');
            $ID = self::GetexaminationID($user);
            $Sql = Database::select('SELECT Examination_Name FROM technical_examination_center WHERE ID ="'.$ID.'"');
            $CompanyName = $Sql[0]['Examination_Name'] ;
            return $CompanyName;
        }
    }

    static function GetUses($User)
    {    $url = $_GET['url'];
        if($url!='Login') {
            $Sql = Database::select("SELECT * FROM users where  id ='$User'");
            $ID = $Sql[0]['Name'] . ' ' . $Sql[0]['LastName'];
            return $ID;
        }
    }
//    function GetMenu()
//    {
//
////        $Parent_li ="";
////        $url = $_GET['url'];
////        if($url!='Login') {
////            $user = Session::Get('Login');
////            $ID = self::GetexaminationID($user);
////
////            $SQL = Database::select('select *from permission where user_id ="' . $ID . '" ');
////
////            $Access = explode(",", $SQL[0]['Menu_ID']);
//
//
////            for ($j = 0; $j < count($Access); $j++) {
//
//                $Sql = Database::select('select * from menu where Parent = 0 and  form_id ="' . $Access[$j] . '"');
//                for ($p = 0; $p < count($Sql); $p++) {
//                    $parent_ID = $Sql[$p]['ID'];
//
//
//                    $submenu = Database::select('select * from menu where Parent ="' . $parent_ID . '"  ORDER BY Menu_Order');
//
//
//                    $Parent_li .= '<li style="font-family: Samim" class="start"> <a href="' . $Sql[$p]['Link'] . '"> <i class="' . $Sql[$p]['Icon'] . '"></i> <span class="title">' . $Sql[$p]['Menu_Title'] . '</span> <span class="selected"></span> <span class="arrow"></span> </a>';
//                    $Parent_li .= '<ul class="sub-menu">';
//                    for ($s = 0; $s < count($submenu); $s++) {
//                        $Parent_li .= ' <li style="font-family: Samim" > <a href="' . $submenu[$s]['Link'] . '"><i class="' . $submenu[$s]['Icon'] . '"></i>  <span class="title">' . $submenu[$s]['Menu_Title'] . '</span>  </a> </li>';
//                    }
//                }
//                $Parent_li .= '</ul>
//                </li>';
//            }
//        }
//return $Parent_li;
//    }


function  GetMenu()
    {

		 $User_ID = self::User();
        $Center = self::GetexaminationID($User_ID);
        $menuItem = self::GetMenuItem($Center);

$Table ="";

    $SQLS = Database::select('select * from insurance_issuance where Examination_Center_ID = "'.$Center.'"');
if(count($SQLS)!=0) {
    for ($k = 0; $k < count($menuItem); $k++) {
        $SQL = Database::select('SELECT * FROM menu  WHERE Parent = 0 and form_Id =' . $menuItem[$k]);

        $Table .= '<li style="font-family: Samim" class="start"> <a href="' . $SQL[0]['Link'] . '">
                     <i class="' . $SQL[0]['Icon'] . '"></i> <span class="title">' . $SQL[0]['Menu_Title'] . '</span>
                      <span class="selected"></span> <span class="arrow"></span> </a>';
        for ($m = 0; $m < count($SQL); $m++) {

            $ID_Menu = $SQL[$m]['ID'];

            $Sql_Parent = Database::select('select * from menu where Parent = "' . $ID_Menu . '" ORDER BY Menu_Order');

            if (count($Sql_Parent) != 0) {




                $Table .= ' <ul class="sub-menu">';

                for ($j = 0; $j < count($Sql_Parent); $j++) {

                    $Table .= '<li style="font-family: Samim" > <a href="' . $Sql_Parent[$j]['Link'] . '"><i class="' . $Sql_Parent[$j]['Icon'] . '"></i>  <span class="title">' . $Sql_Parent[$j]['Menu_Title'] . '</span>  </a> </li>';

                }
                $Table .= '</ul></li>';
            }
        }
    }
    return $Table;
}
else{
    $Table .= '  <li style="font-family: Samim" class=""> <a href="javascript:;">
                     <i class="fa fa-plus-circle"></i> <span class="title">عملیات مرکز معاینه</span>
                      <span class="selected"></span> <span class="arrow"></span> </a>
          
     
           <ul class="sub-menu"><li style="font-family: Samim"> <a href="RequestInsurance"><i class="fa fa-reply"></i>  <span class="title">ثبت درخواست برگه بیمه</span>  </a> </li> </ul>
         

        </li>';
    return $Table;
}
    }



    function GetMenuItem($ID)
    {
        $url = $_GET['url'];

        $sql = Database::select('select * from accessusers where User_id="'.$ID.'"');
if($url != 'Login') {
    $item = $sql[0]['menu_item'];
    $explode = explode(",", $item);

    return $explode;
}

    }


}
