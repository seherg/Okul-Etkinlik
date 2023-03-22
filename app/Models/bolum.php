<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bolum extends Model
{
    protected $table="bolum";
    protected $fillable=[
        'id',
        'bolum_adi',
        'fakulte_id',
    ];
    use HasFactory;
}
