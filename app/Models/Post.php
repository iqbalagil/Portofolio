<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Nette\Schema\Schema;

class Post extends Model
{
    use HasFactory;

    protected $fillable= [
        'nama',
        'email',
        'komen'
    ];
}

