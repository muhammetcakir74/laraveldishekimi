<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Treatment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class TreatmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $datalist = Treatment::all();
        return view('admin.treatment',['datalist'=>$datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $datalist = Treatment::all();
        return view('admin.treatment_add',['datalist'=>$datalist]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $data = new Treatment;
        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        $data->status = $request->input('status');
        $data->category_id = $request->input('category_id');
        $data->user_id = Auth::id();
        $data->price = $request->input('price');
        $data->detail = $request->input('detail');
        $data->image = Storage::putFile('images',$request->file('image'));
        $data->save();

        return redirect()->route('admin_treatments');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Treatment  $treatment
     * @return \Illuminate\Http\Response
     */
    public function show(Treatment $treatment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Treatment  $treatment
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Treatment::find($id);
        $datalist = DB::select('select * from treatments');
        return view('admin.treatment_edit',['data'=>$data,'datalist'=>$datalist]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Treatment  $treatment
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Treatment $treatment,$id)
    {
        $data = Treatment::find($id);
        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        $data->status = $request->input('status');
        $data->category_id = $request->input('category_id');
        $data->user_id = Auth::id();
        $data->price = $request->input('price');
        $data->detail = $request->input('detail');
        $data->save();

        return redirect()->route('admin_treatments');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Treatment  $treatment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Treatment $treatment,$id)
    {
        DB::table('treatments')->where('id','=',$id)->delete();
        return redirect()->route('admin_treatments');
    }
}
