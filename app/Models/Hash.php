<?php
/**
 * Created by PhpStorm.
 * User: СикировТ
 * Date: 01.10.2019
 * Time: 20:51
 */

namespace Models;


final class Hash
{
    private function __construct()
    {
    }

    static function generate(){
       return md5(hexdec(uniqid()));
    }
}