<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Services\OrderService;

class OrderController extends Controller
{
    protected $orderService;

    public function __construct(OrderService $orderService)
    {
        $this->orderService = $orderService;
    }
    public function index()
    {
        $products = Product::all();
        $orders=$this->orderService->getAllOrders();
        return response(['orders' => $orders, 'products'=>$products ]);

    }
    public function create($product_id){
        $product= Product::findOrFail($product_id);
        $order= new Order();
        $order->product_id=$product->product_id;
        $order->unitprice=$product->product_price;
        $order->quantity=0;
        $order->total=$order->quantity*$order->unitprice;
        $order->save();
        return response()->json($order);
    }
    public function store(Request $request){
       
    }
}

