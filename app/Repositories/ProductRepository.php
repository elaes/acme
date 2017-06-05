<?php

namespace App\Repositories;

use App\Product;

class ProductRepository{
    protected $product;

    public function __construct(Product $product){
        $this->product = $product;
    }

    public function getPaginate($n){
        return $this->product->paginate($n);
    }

    public function store(Array $inputs)
    {
        return $this->product->create($inputs);
    }
 
    public function update(Product $product, Array $inputs)
    {
        $product->update($inputs);
    }
 
    public function destroy(Product $product)
    {
        $product->delete();
    }

    public function search($param){
        return $this->product->where('name' ,'like' ,'%'.$param.'%' )->get(); 
    }

}

