<?php
namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
   

    public function showCheckout()
    {
        return view('pages.checkout');
    }

    


}





