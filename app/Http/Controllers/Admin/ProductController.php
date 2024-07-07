<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Product\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function index()
    {
        return view('pages.admin.product.index');
    }

    public function create()
    {
        return view('pages.admin.product.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function edit($product)
    {
        return view('pages.admin.product.edit');
    }

    public function update(Request $request, $product)
    {
        //
    }

    public function destroy($product)
    {
        //
    }
}
