<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Http\Services\ProductService;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function index()
    {
        $products = $this->productService->getAllProducts();
        return response(['status' => 'success', 'products'=>$products , 'code' => 200]);

    }

    public function create()
    {
        return response()->json(['message' => 'Show create form ']);
    }

    public function store(ProductRequest $request)
    {
        $image_path = '';

        if ($request->hasFile('product_image')) {
            $image_path = $request->file('product_image')->store('products', 'public');
        }
        $product=$this->productService->createProduct($request->validated());
        return response()->json($product);
    }
    public function edit($product_id){
        $product=$this->productService->getProductById($product_id);
        return response()->json($product);
    }
   
    public function update(ProductRequest $request)
    {
        $product=$this->productService->updateProduct($request->product_id,$request->validated());
        return response()->json($product);
    }

    public function destroy($product_id)
    {
        $this->productService->deleteProduct($product_id);
        return response()->json(['message' => 'Product Deleted Successfully!! ']);
    }
}
