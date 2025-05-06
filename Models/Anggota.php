<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\Hasfactory;

class Anggota extends Model
{
    public $timestamps = true;
    protected $table = "anggota";
    // protected $fillable = ['nama', 'hp'];
    protected $guarded = ['id'];
}
