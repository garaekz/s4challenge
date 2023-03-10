<?php

namespace App\Services;

use App\Models\Order;

class OrderService
{
    function createOneOrderOrUpdateTheExistingOne($id, $producto, $cantidad, $precio) {
        if ($id) {
            $orden = Order::where('id', $id)->first();
            if ($orden) {
                $orden->producto = $producto;
                $orden->cantidad = $cantidad;
                $orden->precio = $precio;
                $orden->save();
            } else {
                $orden = new Order;
                $orden->id = $id;
                $orden->producto = $producto;
                $orden->cantidad = $cantidad;
                $orden->precio = $precio;
                $orden->save();
            }
        } else {
            $orden = new Order;
            $orden->producto = $producto;
            $orden->cantidad = $cantidad;
            $orden->precio = $precio;
            $orden->save();
        }
    }
}
