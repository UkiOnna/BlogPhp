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

include "Web/admin.php";

include "Web/auth.php";

$router->dispatch();