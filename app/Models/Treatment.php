<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    use HasFactory;

    # One To Many (Inverse) / Belongs To
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function randevu()
    {
        return $this->hasMany(Randevu::class);
    }

    public function process()
    {
        return $this->hasMany(Process::class);
    }

}
