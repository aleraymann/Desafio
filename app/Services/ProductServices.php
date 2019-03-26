<?php

namespace App\Services;

use App\Repositories\ProductRepository;
use App\Validators\ProductValidator;

class ProductServices
{
    private $repository;
    private $validator;

    public function __construct(ProductRepository $repository, ProductValidator $validator)
    {
        $this->repository = $repository;
        $this->validator = $validator;

    }

    public function store($data){

        try
        {
            $this->validator->with($data)->passesOrFail(ValidatorInterface::RULE_CREATE);
            $product = $this->repository->create($data);

            return[
                'success' => true,
                'message' => "Execution OK",
                'data'=>$product,
            ]

        }
        catch(\Exception $esception)
        {
            return[
                'success' => false,
                'message' => "Execution Error",
            ]
        }
    }
    public function update(){}
    public function delete(){}

}