<?php
/**
 * Created by PhpStorm.
 * User: СикировТ
 * Date: 01.10.2019
 * Time: 20:30
 */

namespace Controllers;


use Core\Abstracts\Controller;
use Models\Auth;

class LoginController extends Controller
{

    function show(){
        return $this->render("Admin/login",[
            "title"=>"Login"
        ]);
    }

    function make($username,$password){
        return Auth::login($username,$password);
    }

}