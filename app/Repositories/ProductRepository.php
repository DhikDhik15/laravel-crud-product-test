<?php

namespace App\Repositories;

use App\Models\ProductModel;

class ProductRepository
{
    // This repository will handle database interactions for products
    public function getAllProducts()
    {
        // Logic to retrieve all products from the database
        return ProductModel::all();
    }

    public function findProductById($id)
    {
        // Logic to find a product by its ID in the database
        return ProductModel::find($id);
    }

    public function createProduct(array $data)
    {
        // Logic to create a new product in the database
        return ProductModel::create($data);
    }

    public function updateProduct($id, array $data)
    {
        // Logic to update an existing product in the database
        $product = ProductModel::find($id);
        if ($product) {
            $product->update($data);
            return $product;
        }
    }

    public function deleteProduct($id)
    {
        // Logic to delete a product from the database
        $product = ProductModel::find($id);
        if ($product) {
            $product->delete();
            return true;
        }
    }
}
