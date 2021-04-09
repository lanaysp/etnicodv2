<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\ServicesRequest;
use App\Services;
use App\Billing;
use App\Http\Requests\BillingRequest;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = Billing::all();

        // dd($data);

        return view('pages.admin.layanan.index',[
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $billing = Billing::all();


        return view('pages.admin.layanan.create',[
            'billing' => $billing
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ServicesRequest $request)
    {
        $data = $request->all();

        Services::create($data);

        alert()->success('Success','Data Berhasil Ditambahkan.');

        return redirect()->route('layanan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Billing::with(['services'])->where('services_id', $id)->firstOrFail();
        $services = Services::with(['billing'])->where('id', $id)->firstOrFail();


        return view('pages.admin.layanan.edit',[
            'item' => $item,
            'services' => $services
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BillingRequest $request, $id)
    {
        $data = $request->all();

        $item =  Billing::with(['services'])->where('services_id', $id)->firstOrFail();
        $services = Services::where('id', $id)->first();

        $data['status'] = 3 ;

        $item->update($data);
        $services->update($data);

        alert()->success('Success','Pembayaran Berhasil Disetujui.');

        return redirect()->route('layanan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item =  Billing::with(['services'])->where('services_id', $id)->firstOrFail();
        $services =  Services::with(['billing'])->where('id', $id)->firstOrFail();

        Storage::disk('public')->delete($item->photo);
        $item->delete();
        $services->delete();

        alert()->success('Success','Data Berhasil Dihapus.');


        return redirect()->route('layanan.index');
    }

}
