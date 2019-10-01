<?php
/**
 * Created by PhpStorm.
 * User: СикировТ
 * Date: 01.10.2019
 * Time: 21:26
 */

namespace Controllers\Admin;


use Core\Abstracts\Controller;

class DashboardController extends Controller
{

    function show(){
        return $this->render("Admin/Dashboard");
    }

}