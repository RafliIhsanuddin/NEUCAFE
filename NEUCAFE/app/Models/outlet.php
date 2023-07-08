<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class outlet extends Model
{
    use HasFactory;
    public $table = "outlet";
    public $fillable = ['nama', 'alamat', 'id_akun'];
    public $timestamps = false;
    protected $primaryKey = 'id_akun';
}
