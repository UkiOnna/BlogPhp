<?php

use Controllers\Admin\DashboardController;
use Controllers\IndexController;
use Controllers\LoginController;
use Core\Helpers;
use Core\RenderEngine;
use Klein\Klein;
use Klein\Request;
use Klein\Response;
use Models\Auth;
use Models\Password;
use Models\Tables\News;
use Models\Tables\Users;


$router = new Klein();
$router->get("/?", function () {
    return "TARAATAATATARTARATATA";
});
$router->with("/login", function () use ($router) {
    $controller = new LoginController();
    $router->get("/?", function (Request $request,Response $response) use ($controller) {
        if(Auth::isLogin()){
            $response->redirect(Helpers::url("admin"))->send();
            exit();
        }
        return $controller->show();
    });

    $router->post("/?", function (Request $request, Response $response) use ($controller) {
        if(Auth::isLogin()) {
            $response->redirect(Helpers::url("admin"))->send();
            exit();
        }

        $username = $request->param("username");
        $password = $request->param("password");

        if ($controller->make($username, $password)) {
            $url = Helpers::url("admin");
        } else {
            Helpers::url("login");
        }
        return $response->redirect($url)->send();
    });
});

$router->with("/admin", function () use ($router) {
    $router->get("/?", function (Request $request, Response $response) {
        return $response->redirect(Helpers::url("admin", "dashboard"))->send();
    });

    $router->get("/dashboard/?", function (Request $request,Response $response) {
        Auth::middleware($response);
        $controller = new DashboardController();
        return $controller->show();
    });
});

$router->dispatch();