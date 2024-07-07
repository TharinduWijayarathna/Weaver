<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
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
