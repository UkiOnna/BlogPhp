<?php
/**
 * Created by PhpStorm.
 * User: СикировТ
 * Date: 01.10.2019
 * Time: 19:45
 */

namespace Models;


use Core\Helpers;

class Cookies
{
    private function __construct()
    {

    }

    static function set($name, $value = "", $expire = 0, $secure = false, $httponly = false)
    {
        setcookie($name, $value, $expire, "/", "", $secure, $httponly);
        return self::get($name);
    }

    static function get($key = null)
    {
        return Helpers::keyOrArray($_COOKIE, $key);
    }
}