<?php

namespace App\Services\Product;

use App\Models\Product;

class ProductService
{
    protected $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function store($data)
    {
        return $this->product->create($data);
    }

    public function update($data, $id)
    {
        return $this->product->where('id', $id)->update($data);
    }

    public function destroy($id)
    {
        return $this->product->destroy($id);
    }

    public function show($id)
    {
        return $this->product->find($id);
    }

    public function all()
    {
        return $this->product->all();
    }
}
