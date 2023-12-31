<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class MyCommerceController extends Controller
{
    public function index()
    {
        return view('website.home.index', [
            'categories' => Category::all(),
            'products' => Product::orderBy('id', 'desc')->take('8')->get(['id', 'category_id', 'name', 'selling_price', 'image'])
        ]);
    }

    public function category($id)
    {
//        return 'ok';
        return view('website.category.index', [
            'products' => Product::where('category_id', $id)->orderBy('id', 'desc')->get()
        ]);
    }

    public function detail($id)
    {
        return view('website.detail.index', [
            'product' => Product::find($id )
        ]);
    }
}

