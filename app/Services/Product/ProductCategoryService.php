<?php

namespace App\Services\Product;

use App\Models\ProductCategory;

class ProductCategoryService
{
    protected $productCategory;

    public function __construct(ProductCategory $productCategory)
    {
        $this->productCategory = $productCategory;
    }

    public function store($data)
    {
        return $this->productCategory->create($data);
    }

    public function update($data, $id)
    {
        return $this->productCategory->where('id', $id)->update($data);
    }

    public function destroy($id)
    {
        return $this->productCategory->destroy($id);
    }

    public function show($id)
    {
        return $this->productCategory->find($id);
    }

    public function all()
    {
        return $this->productCategory->all();
    }
}
