<?php
/**
 * Created by PhpStorm.
 * User: СикировТ
 * Date: 01.10.2019
 * Time: 20:39
 */

namespace Models;


use Core\Helpers;
use DateInterval;
use DateTime;
use Klein\Response;
use Models\Tables\Users;


class Auth
{

    private function __construct()
    {

    }

    static function login($username, $password,$api=false)
    {
        if (!$username or !$password){
            Flashes::message("Enter login and password");
            return false;
        }


        $users = new Users();
        if (!$users->has(["username" => $username])) {
            Flashes::message("Invalid login and password","danger");
            return false;
        }
        $user = $users->get("*", [
            "username" => $username
        ]);

        if (!Password::verify($password, $user["password"])) {
            Flashes::message("Invalid login and password","danger");
            return false;
        }

        if($api==false){
            $hash = Hash::generate();

            $date=new DateTime();
            $interval=new DateInterval("P1Y");
            $date->add($interval);

            Cookies::set("auth", $hash,$date->getTimestamp());
            $users->update([
                "hash" => $hash
            ], [
                "username" => $username
            ]);
        }

        Flashes::message("Success login","success");

        return $users->has(["hash" => $hash]);

    }

    static function logout()
    {
        $users = new Users();

        if (!Cookies::get("auth")) {
            return;
        }

        $users->update([
            "hash" => null
        ], [
            "hash" => Cookies::get("auth")
        ]);

        Cookies::set("auth", null, -1);
    }

    static function isLogin(){
        $users=new Users();
        if(!Cookies::get("auth")){
            return false;
        }

        return $users->has([
            "hash"=>Cookies::get("auth")
        ]);
    }

    static function middleware(Response $response){
        if(!self::isLogin()){
            $response->redirect(Helpers::url("login"))->send();
            exit();
        }
    }

}