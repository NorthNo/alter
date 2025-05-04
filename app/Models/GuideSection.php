<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuideSection extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content'];
}
