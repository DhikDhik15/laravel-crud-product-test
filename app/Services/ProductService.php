<?php

namespace App\Services;

use App\Repositories\ProductRepository;

class ProductService
{
    protected $productRepository;
    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }
    // This service will handle product-related logic
    public function getAllProducts()
    {
        // Logic to retrieve all products
        return $this->productRepository->getAllProducts();
    }

    public function findProductById($id)
    {
        // Logic to find a product by its ID
        return $this->productRepository->findProductById($id);
    }

    public function createProduct(array $data)
    {
        // Logic to create a new product
        return $this->productRepository->createProduct($data);
    }

    public function updateProduct($id, array $data)
    {
        // Logic to update an existing product
        return $this->productRepository->updateProduct($id, $data);
    }

    public function deleteProduct($id)
    {
        // Logic to delete a product
        return $this->productRepository->deleteProduct($id);
    }
}
