<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Process;
use App\Models\Randevu;
use App\Models\Treatment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RandevuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index($id)
    {
        $data = Treatment::find($id);
        $datalist = User::all();

        return view('home.randevu',['data'=>$data,'datalist'=>$datalist]);
    }

    public function adminindex()
    {
        $datalist = Randevu::all();
        return view('admin.randevu',['datalist'=>$datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        $data = new Randevu;
        $data->user_id = Auth::id();
        $data->treatment_id = $id;
        $data->date = $request->input('date');
        $data->time = $request->input('time');
        $data->IP = $_SERVER['REMOTE_ADDR'];
        $data->note = $request->input('note');
        $data->doctor_id = $request->input('doctor');
        $data->save();


        return redirect()->back()->with('succes','Randevu başarıyla oluşruruldu');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Randevu  $randevu
     * @return \Illuminate\Http\Response
     */
    public function show(Randevu $randevu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Randevu  $randevu
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Randevu $randevu,$id)
    {
        $data = Randevu::find($id);
        $treatments = Treatment::all();
        $users = User::all();
        return view('admin.randevu_edit',['data'=>$data,'treatments'=>$treatments,'users'=>$users]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Randevu  $randevu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Randevu $randevu,$id)
    {
        $data = Randevu::find($id);
        $data->treatment_id = $request->input('treatment_id');
        $data->doctor_id = $request->input('doctor_id');
        $data->date = $request->input('date');
        $data->time = $request->input('time');
        $data->note = $request->input('note');
        $data->save();
        return back()->with('succes','Randevu Güncellendi.');
    }

    public function approve($id)
    {
        $data = Randevu::find($id);
        $data->status = 'Onaylandı';
        $data->save();

        $process = new Process;
        $process->randevu_id = $data->id;
        $process->user_id = $data->user_id;
        $process->treatment_id = $data->treatment_id;
        $process->hekim_id = $data->doctor_id;
        $process->price = $data->treatment->price;
        $process->payment = 'Yes';
        $process->status = 'True';
        $process->save();

        return back()->with('succes','Randevu Onaylandı.');
    }

    public function approve_cancel($id)
    {
        $data = Randevu::find($id);
        $data->status = 'Onaylanmadı';
        $data->save();

        DB::table('processes')->where('randevu_id','=',$data->id)->delete();


        return back()->with('warning','Randevu Onayı İptal Edildi.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Randevu  $randevu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Randevu $randevu,$id)
    {
        DB::table('randevus')->where('id','=',$id)->delete();
        return redirect()->route('admin_randevu')->with('succes','Kayıt Silindi');
    }
}
