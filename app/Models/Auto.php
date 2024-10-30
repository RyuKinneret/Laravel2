<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auto extends Model
{
    use HasFactory;

    protected $table = "autos"; 
    protected $primaryKey = "auto_id"; 
    public $timestamps = false;

    // guardar por asignación masiva - simple
    protected $guarded = [];
}
