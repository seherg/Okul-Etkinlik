<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ogrenci extends Model
{
    protected $table="ogrenci";
    protected $guarded=[
        //tum verileri aldık.
        //filllable da seçili verileri aldık.
    ];
    use HasFactory;
}
