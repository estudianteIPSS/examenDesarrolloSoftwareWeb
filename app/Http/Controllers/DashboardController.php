<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Product;
use App\Models\User;
use Illuminate\View\View;

class DashboardController extends Controller
{
    /**
     * Muestra el dashboard.
     */
    public function index(): View
    {
        return view('dashboard', [
            'usersCount' => User::count(),
            'productsCount' => Product::count(),
            'clientsCount' => Client::count(),
        ]);
    }
}