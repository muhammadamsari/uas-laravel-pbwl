<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    protected $fillable = ['buku', 'nama', 'tgl'];
    use HasFactory;
}
