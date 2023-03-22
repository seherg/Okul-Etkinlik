<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class etkinlik extends Model
{
    use HasFactory;
    protected  $table="etkinlik";
    protected $fillable=[
        "id",
        "etkinlik_adi",
        "bilgi",
        "kota",
        "baslangic_zamani",
        "bitis_zamani",
        "kalkis_noktasi",
    ];

}
