<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
public function index(Request $request)
{
    $query = Product::query();

    if ($request->filled('keyword')) {
        $query->where('name', 'like', '%' . $request->keyword . '%');
    }

    if ($request->sort === 'price_desc') {
        $query->orderBy('price', 'desc');
    } elseif ($request->sort === 'price_asc') {
        $query->orderBy('price', 'asc');
    }

    $products = $query->paginate(6);

    return view('products.index', compact('products'));

}

    public function create()
    {
      return view('products.register');
    }

}
