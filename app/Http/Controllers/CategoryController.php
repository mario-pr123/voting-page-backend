<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index($id)
    {
        return Category::where('id_type', '=', $id)->get();
    }
    public function show()
    {
        return Category::all();
    }
}