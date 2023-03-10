<?php

namespace App\Services;

use App\Models\Order;
use App\Models\User;

class UserService
{
    public function getAllUsersWithOrders()
    {
        $users = User::all();

        foreach ($users as $user) {
            $orders = Order::where('user_id', $user->id)->get();

            $user->orders = $orders->map(function ($order) {
                $total = $order->quantity * $order->price;
                return [
                    'id' => $order->id,
                    'product' => $order->product,
                    'quantity' => $order->quantity,
                    'price' => $order->price,
                    'total' => $total
                ];
            })->toArray();
        }

        return $users;
    }
}
