<?php
/**
 * Created by PhpStorm.
 * User: СикировТ
 * Date: 01.10.2019
 * Time: 20:40
 */

namespace Models;


final class Password
{
    private function __construct()
    {

    }

    static function hash($password){
        return password_hash($password,PASSWORD_DEFAULT);
    }

    static function verify($password,$hash){
        return password_verify($password,$hash);
    }
}