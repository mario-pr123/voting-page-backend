<?php

namespace App\Http\Controllers;

use App\Models\Categories;

class CategoriesController extends Controller
{
    public function show($id)
    {
        $categories = Categories::join('nominee', 'nominee.id_nominee', 'categories.id_nominee')
            ->select(
                ("nominee.id_nominee"),
                ("nominee.name_nominee"),
                ("nominee.last_name_nominee"),
                ("nominee.photo")
            )->where('categories.id_category', '=', $id)->get();
        return response()->json($categories, 201);
    }
    public function showCat($id)
    {
        $cat = Categories::join('category', 'category.id_category', 'categories.id_category')
            ->select(("category.id_category"), ("category.name_category"), ("category.desc_cat"))
            ->groupBy("category.name_category", "category.id_category", "category.desc_cat")
            ->where('categories.id_category', '=', $id)->get();
        return response()->json($cat, 201);
    }
}