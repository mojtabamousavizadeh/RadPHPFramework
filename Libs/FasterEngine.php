<?php

/**
 * Created by PhpStorm.
 * User: Ghanavati
 * Date: 21/06/2016
 * Time: 02:29 PM
 */

namespace Libs;

global $PageType;
$PageType = "Basic";

class FasterEngine
{


    public static function Make($fileName,$Type)
    {

        $fileName .= ".bts";
        if (file_exists($fileName)) {

            global $PageType;
            $PageType = $Type;

            $html = fopen($fileName, "r");

            $fileSize = filesize($fileName);

            $file = fread($html, $fileSize);

            $file = self::DoItFaster($file,$fileName);

            $temporary='Template/Runnable.php';
            $html = fopen($temporary, "w");
            fwrite($html,$file);
            fclose($html);
            require ($temporary);
        }
    }

    public static function Render($fileName)
    {
        $fileName .= ".bts";

        if (file_exists($fileName)) {

            $html = fopen($fileName, "r");

            $fileSize = filesize($fileName);

            $file = fread($html, $fileSize);

            $file = self::DoItFaster($file,$fileName);

            return $file;
        }
    }

    public static function DoItFaster($file,$fileName)
    {

        //Step 1

            global $array_variable;
            foreach ($array_variable as $var => $value) {

                $var = strtolower($var);

                $file = str_ireplace('{' . $var . '}', $value, $file);

                $file = str_ireplace('{use::'.$var.'}', '<?php use ' . $value . ' ;?>', $file);

                $file = str_ireplace('{require::'.$var.'}', '<?php require ' . $value . ' ;?>', $file);
            }


        //Step 2
        global $Lang;
        while($started = strpos($file,"[@")) {
            $ended = strpos($file, "@]", $started);
            $sub = substr($file, $started + 2, $ended - $started - 2);
            $explode = explode('.', $sub);
            $rep = $Lang[$explode[0]][$explode[1]];
            $file = str_ireplace("[@" . $sub . "@]", $rep, $file);
        }


            //Step 3
        $request_check = strpos($file,'{request=>Content}');
        if ($request_check==true){
           // echo $request_check;

            $Content = ContentPlaceHolder::get_content();
            $Rendered = self::Render($Content);
            $file = str_ireplace('{request=>Content}', $Rendered, $file);
        }


        //Step 4
            $file = str_replace('{php}', '<?php ', $file);

            $file = str_replace('{/php}', ' ?>', $file);

            return $file;
        }

}