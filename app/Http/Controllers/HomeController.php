<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Review;
use App\Models\Category;
use App\Models\Image;
use App\Models\Message;
use App\Models\Setting;
use App\Models\Treatment;
use App\Models\User;
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

    public static function countreview($id)
    {
        return Review::where('treatment_id',$id)->count();
    }

    public static function avrgreview($id)
    {
        return Review::where('treatment_id',$id)->average('rate');
    }


    public function index()
    {
        $setting = Setting::first();
        $doctors = User::all();
        $slider = Treatment::select('id','title','image','price','slug')->limit(4)->get();
        $picked = Treatment::select('id','title','image','price','slug')->limit(6)->inRandomOrder()->get();
        $last = Treatment::select('id','title','image','price','slug','created_at','description')->limit(6)->orderByDesc('id')->get();


        $data = [
          'setting'=>$setting,
          'slider'=>$slider,
          'picked'=>$picked,
          'last'=>$last,
            'doctors'=>$doctors,
          'page'=>'home'
        ];
        return view('home.index',$data);
    }

    public function aboutus()
    {
        $setting = Setting::first();
        return view('home.aboutus',['setting'=>$setting]);
    }
    public function contact()
    {
        $setting = Setting::first();
        return view('home.contact',['setting'=>$setting]);
    }
    public function references()
    {
        $setting = Setting::first();
        return view('home.references',['setting'=>$setting]);
    }

    public function faq()
    {
        $datalist = Faq::all()->sortBy('position');
        return view('home.faq',['datalist'=>$datalist]);
    }

    public function categorytreatments($id,$slug)
    {
        $datalist = Treatment::where('category_id',$id)->get();
        $data = Category::find($id);

        return view('home.categorytreatments',['data'=>$data,'datalist'=>$datalist]);
    }

    public function treatment($id,$slug)
    {
        $data = Treatment::find($id);
        $datalist = Image::where('treatment_id',$id)->get();
        $reviews = Review::where('treatment_id',$id)->get();
        return view('home.treatment_detail',['data'=>$data,'datalist'=>$datalist,'reviews'=>$reviews]);
    }

    public function gettreatment(Request $request)
    {
        $search=$request->input('search');

        $count = Treatment::where('title','like','%'.$search.'%')->get()->count();
        if($count==1)
        {
            $data= Treatment::where('title','like','%'.$search.'%')->first();
            return redirect()->route('treatment',['id'=>$data->id,'slug'=>$data->slug]);
        }

        else
        {
            return redirect()->route('treatmentlist',['search'=>$search]);
        }

    }

    public function treatmentlist($search)
    {
        $datalist = Treatment::where('title','like','%'.$search.'%')->get();
        return view('home.search_treatments',['search'=>$search,'datalist'=>$datalist]);
    }

    public function sendmessage(Request $request)
    {
        $data = new Message();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->message = $request->input('message');
        $data->subject = $request->input('subject');
        $data->save();

        return redirect()->route('contact')->with('succes',"Mesajınız başarıyla gönderildi.");

    }



    public function test($id)
    {
        echo "Id Number : ", $id;
    }

    public function product($id,$slug)
    {
        $data = Treatment::first();
        print_r($data);
        exit();
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
