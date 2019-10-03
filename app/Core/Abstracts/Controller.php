<?php
/**
 * Created by PhpStorm.
 * User: СикировТ
 * Date: 30.09.2019
 * Time: 21:12
 */

namespace Core\Abstracts;


use Core\Config;
use Core\Interfaces\ControllerInterface;
use Core\RenderEngine;

abstract class Controller implements ControllerInterface
{
    protected $layout;

    public function render($template_name, $variables = [])
    {
        if ($this->layout !== null){
            $variables["template"]=$template_name. Config::main("template_extension");
            $template_name="layout/" . $this->layout;
        }
            $engine = RenderEngine::get();
        if ($variables) {
            foreach ($variables as $key => $value) {
                $engine->assign($key, $value);
            }
        }
        return $engine->display($template_name . Config::main("template_extension"));
    }
}