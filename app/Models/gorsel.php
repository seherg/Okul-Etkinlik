<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gorsel extends Model
{
    protected $table="gorsel";
    protected $fillable=[
        "id",
        "gorsel_adi",
        "etkinlik_id",
    ];
    use HasFactory;
}
