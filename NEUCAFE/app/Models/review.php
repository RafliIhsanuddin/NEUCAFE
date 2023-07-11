<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    use HasFactory;
    protected $table = 'review';
    protected $fillable = ['rate_produk', 'rate_pelayanan', 'rate_tempat', 'id_outlet'];
    public $timestamps = false;
    protected $primaryKey = 'id_review';
}