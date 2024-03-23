<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buyer; // Assuming Buyer model exists

class BuyerController extends Controller
{
    public function dashboard()
    {
        return view('buyer.dashboard');
    }

    public function index()
    {
        // Logic to fetch buyers from the database
        $buyers = Buyer::all();
        return view('buyer.index', compact('buyers'));
    }
}

