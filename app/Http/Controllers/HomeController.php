<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public static function categorylist()
    {
        return Category::where('parent_id', '=', 0)->with('children')->get();
    }

    public static function getSettings()
    {
        return Setting::first();
    }


    public function index()
    {
        $setting = Setting::first();
        return view('home.index',['setting'=>$setting]);
    }

    public function aboutus()
    {
        return view('home.aboutus');
    }
    public function contact()
    {
        return view('home.contact');
    }
    public function references()
    {
        return view('home.references');
    }
    public function faq()
    {
        return view('home.faq');
    }

    public function shop()
    {
        return view('home.shop');
    }

    public function test($id)
    {
        echo "Id Number : ", $id;
    }

    public function login()
    {
        return view('admin.login');
    }

    public function logincheck(Request $request){
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('adminhome');
        }

        return back()->withErrors([
            'email' => 'Email ve ya şifre yanlış.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }

}
