<?php
/**
 * Created by PhpStorm.
 * User: СикировТ
 * Date: 01.10.2019
 * Time: 19:52
 */

namespace Models;


use Core\Helpers;

class Session
{
    public function __construct()
    {

    }

    public function set($key,$value){
        $_SESSION[$key]=$value;
        return self::get($key);
    }

    static function get($key=null){
        return Helpers::keyOrArray($_SESSION,$key);
    }
}