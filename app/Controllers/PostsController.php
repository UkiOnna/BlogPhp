<?php
/**
 * Created by PhpStorm.
 * User: СикировТ
 * Date: 03.10.2019
 * Time: 20:48
 */

namespace Controllers;


use Core\Abstracts\Controller;
use Models\Tables\Posts;

class PostsController extends Controller
{
    protected $layout = "main";
    const ITEMS_COUNT=10;

    function getByPage($page){

        $posts=new Posts();

        $count=$posts->count();

        $pages=ceil($count/self::ITEMS_COUNT);

        if($page>$pages){
            return false;
        }

        $items=$posts->select("*",[
            "ORDER"=>["id"=>"DESC"],
            "LIMIT"=>[
                ($page-1)*self::ITEMS_COUNT,
                self::ITEMS_COUNT
            ]
        ]);

        return $this->render("posts",[
            "title"=>"Main",
            "posts"=>$items,
            "pages"=>$pages,
            "current_page"=>$page
        ]);

    }

    function getById($id){

    }
}