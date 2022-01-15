<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Randevu extends Component
{
    public $doctor = '';
    public $date = '';
    public $time = '';

    public function render()
    {
        $datalist = \App\Models\Randevu::where('doctor_id','=',$this->doctor)->get();
        $users = User::all();
        print_r($datalist);

        return view('livewire.randevu',['users'=>$users,'datalist'=>$datalist,'query'=>$this->date,'query2'=>$this->doctor]);
    }
}
