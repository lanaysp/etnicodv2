<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\User;

class DashboardController extends Controller
{
    public function index()
    {


        $customer = User::count();

        return view('pages.dashboard',[
            'customer' => $customer
        ]);
    }

    public function product(){

        return view('pages.product');
    }

    public function billing(){

        $title = 'Billing';

        return view('pages.billing',[
            'title' => $title
        ]);
    }
}
