<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\NewsletterRequest;
use App\Team;
use App\Suport;
use App\Newsletter;
use App\Portfolio;


class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
         $suports = Suport::all();
         $teams = Team::all();
         $portfolios = Portfolio::get();
        //  $portfolios = Portfolio::whereKategori()->take(10)->get();
        // $result = [];
        //  $portfolios = ['filter-web', 'filter-seo', 'filter-desaingrafis'];
        // foreach ($portfolios as $item) {
        // $result[] = Portfolio::whereKategori($item)->take(1)->get();
        // }

         return view('pages.home',[
            'teams' => $teams,
            'suports' => $suports,
            'portfolios' => $portfolios,
            // 'result' => $result,
            // dd($result)
        ]);

    }
    public function send(NewsletterRequest $request)

    {
        $data = $request->all();
        // dd($data);
        Newsletter::create($data);
        toast('Terimakasih! , anda akan mendapatkan info info menarik dari kami','success');
         return redirect()->route('home');
    }



}
