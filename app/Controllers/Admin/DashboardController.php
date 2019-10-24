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
    const ITEMS_COUNT = 10;

    function show()
    {
        $table = new Posts();

        $posts = $table->select();
        $posts = $table->map($posts);
        return $this->render("Admin/Dashboard", [
            "posts" => $posts
        ]);
    }

    function getByPage($page){
        $posts = new Posts();
        $count = $posts->count();
        $pages = ceil($count / self::ITEMS_COUNT);
        if ($page > $pages){
            return false;
        }
        $items = $posts->select("*", [
            "ORDER" => ["id" => "DESC"],
            "LIMIT" => [
                ($page-1) * self::ITEMS_COUNT,
                self::ITEMS_COUNT,
            ]
        ]);
        $items = $posts->map($items);
        return $this->render("admin/Dashboard", [
            "title" => "Main page",
            "posts" => $items,
            "pages" => $pages,
            "current_page" => $page
        ]);
    }

}