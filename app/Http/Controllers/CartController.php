<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(Request $request)
    {
        $defaultUser = User::first();
        $cartItems = $defaultUser->cartProducts()
            ->with('product')
            ->orderBy('id', 'desc')
            ->get();
        return view('cart.show', compact('cartItems'));
    }
}
