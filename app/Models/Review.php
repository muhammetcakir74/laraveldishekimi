<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
      'treatment_id',
      'user_id',
      'IP',
      'subject',
      'review',
      'rate',
    ];

    public function treatment()
    {
        return$this->belongsTo(Treatment::class);
    }

    public function user()
    {
        return$this->belongsTo(User::class);
    }



}
