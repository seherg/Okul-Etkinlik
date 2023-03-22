<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class calisan extends Model
{
    protected $table="calisan";
    protected $fillable=[
        'id',
        'user_id',
        'gorevi',
        'resim',
        'sorumluluk',
    ];
    use HasFactory;
}
