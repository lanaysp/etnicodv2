<?php

namespace App\Http\Controllers;


use App\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PortfolioController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $portfolios = Portfolio::paginate(3);
        return view('pages.portfolio',[
            'portfolios' => $portfolios
        ]);
    }

}
