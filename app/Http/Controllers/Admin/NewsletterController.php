<?php

namespace App\Http\Controllers\Admin;

use App\Newsletter;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Http\Requests\Admin\NewsletterRequest;

use Yajra\DataTables\Facades\DataTables;

class NewsletterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->ajax())
        {
            $query = Newsletter::query();

            return Datatables::of($query)
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make();
        }

        return view('pages.admin.newsletter.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.newsletter.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsletterRequest $request)
    {
        $data = $request->all();


        $data['photo'] = $request->file('photo')->store('assets/newsletter','public');

        Newsletter::create($data);

        return redirect()->route('newsletter.index');
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
        $item = Newsletter::findOrFail($id);

        return view('pages.admin.newsletter.edit', [
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NewsletterRequest $request, $id)
    {
        $data = $request->all();

        $data['photo'] = $request->file('photo')->store('assets/Newsletter','public');

        $item = Newsletter::findOrFail($id);

        $item->update($data);

        return redirect()->route('newsletter.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Newsletter::findOrFail($id);
            $item->delete();

            return redirect()->route('newsletter.index');

    }
}
