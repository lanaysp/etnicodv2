<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\NewsletterRequest;
use App\Http\Requests\ServicesRequest;
use App\Team;
use App\Suport;
use App\Newsletter;
use App\Portfolio;
use App\Services;
use App\Billing;
use App\Http\Requests\BillingRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

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
         $portfolios = Portfolio::paginate(6);
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
        Newsletter::create($data);
        toast('Terimakasih! , anda akan mendapatkan info info menarik dari kami','success');
         return redirect()->route('home');
    }

    public function bundle()
    {
        // $data = Services::all();
        return view('pages.bundle');
    }


    public function createbundle(ServicesRequest $request)
    {
        $data = $request->all();
        // dd($data);
        $data['expiration'] = Carbon::now()->add(1, 'month');
        $data['status'] = 1;
        $data['users_id'] = Auth::user()->id;
        $data['progres'] = 0;

        $services = Services::create($data);

        // dd($services);

        $billing = [
            'invoice' => 'ETC'.mt_rand(1000,9999).'',
            'services_id' => $services->id,
            'users_id' => Auth::user()->id,
            'duedate' => Carbon::now()->add(3, 'day'),
            'price' => 900000,
            'status' => 1,

        ];
        // dd($billing);


         Billing::create($billing);


       alert()->image('Pembelian Berhasil!','Silahkan transfer berdasarkan harga yg tertera','https://etnicode.com/images/ilustrasi/send-email.png','80%','80%');

        return redirect()->route('product')->with('success','User deleted successfully');
    }




}
