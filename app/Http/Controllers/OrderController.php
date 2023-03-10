<?php

namespace App\Http\Controllers;

use App\Services\OrderService;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    private $service;

    public function __construct(OrderService $service)
    {
        $this->service = $service;
    }

    public function store(Request $request)
    {
        return response()->json(
            $this->service->createOneOrderOrUpdateTheExistingOne($request->id, $request->producto, $request->cantidad, $request->precio)
        );
    }
}
