<?php

namespace App\Http\Controllers;

use App\Services\UserService;

class UserController extends Controller
{
    private $service;

    function __construct(UserService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $users = $this->service->getAllUsersWithOrders();
        return response()->json($users);
    }
}
