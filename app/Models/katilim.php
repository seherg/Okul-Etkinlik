<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class katilim extends Model
{
    protected $table="katilim";
    protected $fillable=[
        'id',
        'katilimci_id',
        'etkinlik_id',
        'katilimci_pozisyon',
    ];
    use HasFactory;
}
