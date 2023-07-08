<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class akun extends Model
{
    use HasFactory;
    public $table = "akun";
    protected $fillable = ['id_akun', 'email', 'password', 'notelp', 'kodeManajer'];
    public $timestamps = false;
    protected $primaryKey = 'id_akun';
}
