<?php

namespace App\Repositoy\Eloquent\Product;

use App\Models\Product;
use App\Repositoy\Repository\Product\ProductRepositoryInterface;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;

class ProductRepository implements ProductRepositoryInterface
{
    protected $_model;
    public function __construct(Product $model)
    {
        $this->_model = $model;
    }

    public function getAllProducts(): LengthAwarePaginator
    {
        return $this->_model->with('productImages')->orderBy('id', 'ASC')->paginate(20);
    }

    public function getProductBySku(string $sku): Product
    {
        return $this->_model->with(['categories', 'brands', 'productImages'])->where('id', $sku)->first();
    }

    public function getAllProductsNoPrice(): LengthAwarePaginator
    {
        return $this->_model->where('price', '0.00')->orderBy('id', 'ASC')->paginate(20);
    }

    public function getProductByName(string $name)
    {
        return $this->_model->with(['categories', 'brands', 'productImages'])
            ->where('name', 'LIKE', "%{$name}%")
            ->get();
    }
}
