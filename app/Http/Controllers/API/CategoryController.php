<?php

namespace App\Http\Controllers\API;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function index()
    {
        return response()->json([
        'success' => true,
        'data' => Category::all()
        ], 200);
    }
}
