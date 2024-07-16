<?php

namespace App\Http\Services;

use App\Models\Product;

class ProductService
{
    public function getAllProducts()
    {
        return Product::all();
    }

    public function createProduct(array $data)
    {
        return Product::create($data);
    }
    private function fillProductData(Product $product, array $data){
        $product->product_name=$data['product_name']  ?? $product->product_name;
        $product->product_subcategory=$data['product_subcategory']  ?? $product->product_subcategory;
        $product->product_image_link=$data['product_image_link']  ?? $product->product_image_link;
        $product->product_ean_code=$data['product_ean_code']  ?? $product->product_ean_code;
        $product->product_price=$data['product_price']  ?? $product->product_price;
        $product->product_points=$data['product_points']  ?? $product->product_points;
        $product->product_in_partnership=$data['product_in_partnership']  ?? $product->product_in_partnership;
        $product->product_brand=$data['product_brand'] ?? $product->product_brand;
        $product->product_category=$data['product_category']  ?? $product->product_category;
        $product->product_supplier=$data['product_supplier'] ?? $product->product_supplier;
        $product->product_cmup=$data['product_cmup'] ?? $product->product_cmup;
        $product->product_location=$data['product_location'] ?? $product->product_location;
        $product->product_stock_1=$data['product_stock_1'] ?? $product->product_stock_1;
        $product->product_return_condition=$data['product_return_condition'] ?? $product->product_return_condition;
        $product->product_discount=$data['product_discount'] ?? $product->product_discount;
    }


    public function updateProduct($product_id,array $data){
        $product=Product::findOrFail($product_id);
        $this->fillProductData($product,$data);
        $product->save();
        return $product;

    }

    public function deleteProduct($product_id){
        try{
            $product=Product::findOrFail($product_id)->delete();
            return true;
        } catch (ModelNotFoundException $e) {
            $e->getMessage();
            return false;
        }
    }
    public function getProductById($product_id){
        return Product::findOrFail($product_id);
    }
}
