<?php
/**
 * Created by PhpStorm.
 * User: СикировТ
 * Date: 03.10.2019
 * Time: 19:53
 */

namespace Controllers\Admin;


use Core\Abstracts\Controller;
use Klein\Request;
use Models\Cookies;
use Models\Tables\Categories;
use Models\Tables\Posts;
use Models\Tables\Users;

class CategoriesController extends Controller
{
    const ITEMS_COUNT = 10;
    function getByPage($page){
        $categories = new Categories();
        $count = $categories->count();
        $pages = ceil($count / self::ITEMS_COUNT);
        if ($page > $pages){
            return false;
        }
        $items = $categories->select("*", [
            "ORDER" => ["id" => "DESC"],
            "LIMIT" => [
                ($page-1) * self::ITEMS_COUNT,
                self::ITEMS_COUNT,
            ]
        ]);
        return $this->render("admin/Categories", [
            "title" => "Main page",
            "categories" => $items,
            "pages" => $pages,
            "current_page" => $page
        ]);
    }

    function show()
    {
        $table = new Categories();

        $categories = $table->select();
        return $this->render("Admin/Categories", [
            "categories" => $categories
        ]);
    }

    function create()
    {
        $categories=new Categories();
        return $this->render("Admin/Forms/CategoryForm", [
            "action" => "create",
            "category" => $categories->get(["id"])
        ]);
    }

    function update($id)
    {

        $categories=new Categories();
        if (!$categories->has(["id" => $id]))
            return false;

        return $this->render("Admin/Forms/CategoryForm", [
            "action" => "update",
            "category" => $categories->getById($id),
            "user" => $categories->get(["id"])
        ]);
    }

    function postCreate(Request $request)
    {
        $categories = new Categories();
        return $categories->insert([
            "name" => $request->param("name")
        ]);
    }

    function postUpdate(Request $request)
    {
        $categories = new Categories();
        return $categories->update([
            "name" => $request->param("name"),
        ], [
            "id" => $request->param("id")
        ]);
    }

    function postDelete(Request $request)
    {
        $categories = new Categories();
        return $categories->delete([
            "id" => $request->param("id")
        ]);
    }

}