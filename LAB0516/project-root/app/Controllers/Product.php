<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;

class Product extends BaseController
{
    public function index()
    {
		$model = new ProductModel();
		$arr = $model -> findAll();
        $str = "In NY I milly rock";
        $str2 = "welcome";
        // return "<h2>This is index of Product</h2>";
        return view('Product/index', compact('str', 'str2', 'arr'));
    }
    public function show($p)
    {
        return "<h2>Text: " . $p . "</h2>";
    }
}
