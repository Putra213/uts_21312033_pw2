<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peran extends Model
{
    use HasFactory;
    protected $table ='peran';
    protected $fillable = ['nama', 'umur', 'bio'];
}

