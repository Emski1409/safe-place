<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diary extends Model
{
    protected $fillable = [
        'title',
        'date',
        'comment',
        'user_id'

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function url()
    {
        return route('diary.show',$this->id);
    }
}
