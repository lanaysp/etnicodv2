<?php

namespace App\Http\Controllers;

use App\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Billing;

class DashboardController extends Controller
{
    public function index()
    {


        $services = Services::all();

        return view('pages.dashboard',[
            'services' => $services
        ]);
    }

    public function product(){


        $data = Services::all()->where('users_id',Auth::user()->id);
        $billing = Billing::all();
        return view('pages.product',[
            'data' => $data,
            'billing' => $billing,
        ]);
    }

    public function billing(){

        // $req = $request->all();

        $data = Billing::all()->where('users_id',Auth::user()->id);
        $title = 'Billing';
        $billing = Billing::all()->where('services_id');

        // dd($request->name);
        return view('pages.billing',[
            'title' => $title,
            'data' => $data,
            'billing' => $billing,
            // 'req' => $req
        ]);
    }
    public function payment(Request $request, $id){

        $billing = Billing::with(['services'])->where('services_id', $id)->firstOrFail();
        $services = Services::with(['billing'])->where('id', $id)->firstOrFail();
        // dd($billing);
        $data = Billing::all()->where('users_id',Auth::user()->id);
        // $billing = Billing::all()->where('services_id');

        return view('pages.bukti-tf',[
            'data' => $data,
            'billing' => $billing,
            'services' => $services,
            // 'req' => $req
        ]);
    }

     public function tf(Request $request, $id)

    {
        $data = $request->all();

        $billing = Billing::where('services_id',$id)->first();
        $services = Services::where('id', $id)->first();
        // dd($services);

        $data['photo'] = $request->file('photo')->store('assets/buktitf', 'public');
        $data['status'] = 2;


        $billing->update($data);
        $services->update($data);

        toast('Terimakasih! , Pembayaran anda akan kami proses dalam waktu 1x24 jam kerja','success');
         return redirect()->route('billing');
    }
}
