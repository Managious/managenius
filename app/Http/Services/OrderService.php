<?php

namespace App\Http\Services;

use App\Models\Order;

class OrderService
{
    public function getAllOrders()
    {
        return Order::all();
    }

    public function createOrder(array $data)
    {
        return Order::create($data);
    }
    private function fillOrderData(Order $order, array $data){
        $order->product_id=$data['product_id']  ?? $order->product_id;
        $order->client_id=$data['client_id']  ?? $order->client_id;
        $order->quantity=$data['quantity']  ?? $order->quantity;
        $order->unitprice=$data['unitprice']  ?? $order->unitprice;
        $order->total=$data['total']  ?? $order->total;
        $order->discount=$data['discount']  ?? $order->discount;
    }


    public function updateOrder($order_id,array $data){
        $order=Order::findOrFail($order_id);
        $this->fillOrderData($order,$data);
        $order->save();
        return $order;

    }

    public function deleteOrder($order_id){
        try{
            $order=Order::findOrFail($order_id)->delete();
            return true;
        } catch (ModelNotFoundException $e) {
            $e->getMessage();
            return false;
        }
    }
    public function getOrderById($order_id){
        return Order::findOrFail($order_id);
    }
}
