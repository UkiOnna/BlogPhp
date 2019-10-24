<?php

use Controllers\Api\TokenController;
use Controllers\Api\UsersController;
use Klein\Request;
use Klein\Response;
use Models\Hash;

$router->with("/api",function () use($router){

    $router->post("/token/?",function (Request $request,Response $response){
        header("Content-Type: application/json; charset=utf-8",true);

        $username=$request->param("username");
        $password=$request->param("password");

        $controller=new TokenController();

        return $controller->generate($username,$password);

    });

    $router->post("/users/?",function (Request $request,Response $response){
        header("Content-Type: application/json; charset=utf-8",true);
        Hash::checkToken($request,$response);

        $controller=new UsersController();
        return $controller->getAll();

    });
});