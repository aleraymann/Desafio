<?php
namespace App\Repositories;

use App\Product;

class ProductRepository
{
        protected $product;

        public function __construct(Product $product)
        {
                $this->product = $product;
        }

        public function create($data)
	{
		return $this->product->create($data);
        }
               
        public function update($data,$id)
       {
                
                $product =  $this->product->find($id);
                return $product->update($data);
       }
}