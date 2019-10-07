<?php
/**
 * Created by PhpStorm.
 * User: СикировТ
 * Date: 07.10.2019
 * Time: 21:04
 */

namespace Core\Abstracts;


use Core\Interfaces\ApiControllerInterface;
use Models\Flashes;

abstract class ApiController implements ApiControllerInterface
{

    const CODE_START = 5000;

    public function render($datas, $code)
    {
        return json_encode([
            "code" => $code+self::CODE_START,
            "data" => $datas,
            "messages"=>Flashes::get()
        ]);
    }
}