<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fakulte extends Model
{
    protected $table="fakulte";
    protected $fillable=[
        'id',
        'fakulte_adi',
    ];
    use HasFactory;
}
