<?php

/**
 * Created by PhpStorm.
 * User: MojtabaMousavizadeh
 * Date: 13/02/2016
 * Time: 07:07 PM
 */

namespace Libs;

use Libs\ContentPlaceHolder;
use Libs\FasterEngine;

class View
{
    public static function render($name, $type = false)
    {
        if ($type==false) {
            ContentPlaceHolder::set_content('Template/' . Theme . '/' . $name);
            FasterEngine::Make('Template/' . Theme . '/Masters', 'Basic');
        }else{
            FasterEngine::Make('Template/' . Theme . '/' . $name, 'Basic');
        }
    }

    public static function render_Module($name, $Theme, $Module)
    {
        ContentPlaceHolder::set_content('Modules/' . $Module . '/Designs/' . $Theme . '/' . $name);
        FasterEngine::Make('Template/' . Theme . '/Masters', 'Module');
    }

}