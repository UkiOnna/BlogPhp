<?php
/**
 * Created by PhpStorm.
 * User: СикировТ
 * Date: 01.10.2019
 * Time: 21:26
 */

namespace Controllers\Admin;


use Core\Abstracts\Controller;
use Models\Tables\Posts;

class DashboardController extends Controller
{

    function show()
    {
        $table = new Posts();

        $posts = $table->select();
        $posts = $table->map($posts);
        return $this->render("Admin/Dashboard", [
            "posts" => $posts
        ]);
    }

}