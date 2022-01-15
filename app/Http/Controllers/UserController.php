<?php

namespace App\Http\Controllers;

use App\Models\Randevu;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.user_profile');
    }


    public function myreviews()
    {
        $datalist = Review::where('user_id','=',Auth::user()->id)->get();
        return view('home.user_reviews',['datalist'=>$datalist]);
    }

    public function destroymyreview(Review $review,$id)
    {
        $data=Review::find($id);
        $data->delete();
        return redirect()->back()->with('succes','Review Deleted');
    }

    public function doctorrandevushow()
    {
        $datalist = Randevu::where('doctor_id','=',Auth::user()->id)->get();
        return view('home.doctor_treatments',['datalist'=>$datalist]);
    }

    public function userrandevushow()
    {
        $datalist = Randevu::where('user_id','=',Auth::user()->id)->get();
        return view('home.user_treatments',['datalist'=>$datalist]);
    }


    public static function getdoctorname($id)
    {
        $user = User::find($id);
        return $user->name;
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
