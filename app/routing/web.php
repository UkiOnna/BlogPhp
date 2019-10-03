<?php

use Controllers\Admin\DashboardController;
use Controllers\IndexController;
use Controllers\LoginController;
use Controllers\PostsController;
use Core\Helpers;
use Core\RenderEngine;
use Klein\Klein;
use Klein\Request;
use Klein\Response;
use Models\Auth;
use Models\Password;
use Models\Tables\News;
use Models\Tables\Posts;
use Models\Tables\Users;


$router = new Klein();
$router->get("/?", function () {
    $controller=new PostsController();
    return $controller->getByPage(1);
});


$router->get("/page/[i:page]/?", function (Request $request) {
    $controller=new PostsController();
    return $controller->getByPage($request->param("page"));
});

$router->get("/[i:id]/?", function () {

});


include "Web/admin.php";

include "Web/auth.php";

$router->dispatch();