<?php
/**
 * Created by PhpStorm.
 * User: СикировТ
 * Date: 03.10.2019
 * Time: 19:29
 */

namespace Models;


class Flashes
{
    private function __construct()
    {
    }

    static function message($massage,$type="info"){
        $_SESSION["flashes"][]=[
            "message"=>$massage,
            "type"=>$type
        ];
    }

    static function get(){
        $flashes=$_SESSION["flashes"];
        unset($_SESSION["flashes"]);
        return $flashes;
    }
}