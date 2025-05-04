<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SSS extends Model
{
    use HasFactory;

    protected $table = "sss";

    protected $fillable = [
        'answer',
        'question',
    ];

    public $timestamps = false; // Timestamps kullanmıyorsanız bu satırı ekleyin

}
