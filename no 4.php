<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = ['Nama', 'Alamat', 'Telpon', 'Stock', 'Pesanan'];
    protected $guarded = [];
}
