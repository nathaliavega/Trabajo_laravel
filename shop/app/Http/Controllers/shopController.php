<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ShopController extends Controller
{
    public function index()
    {

        $response = Http::get('https://fakestoreapi.com/products');

        if ($response->successful()) {

            $products = $response->json();


            return view('/dashboard', compact('products'));
            
        } else {
            
            return view('/dashboard')->with('error', 'No se pudieron obtener los productos.');
        }
    }
}
