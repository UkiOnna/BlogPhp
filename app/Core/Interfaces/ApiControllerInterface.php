<?php
/**
 * Created by PhpStorm.
 * User: СикировТ
 * Date: 07.10.2019
 * Time: 21:06
 */

namespace Core\Interfaces;


interface ApiControllerInterface
{
    public function render($datas,$code);
}