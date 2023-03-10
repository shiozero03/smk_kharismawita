<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unduhandokumen extends Model
{
    use HasFactory;
    protected $table = 'unduhandokumens';
    protected $primarykey = 'id';
    protected $fillable = [
        'dokumen',
        'judul'
    ];
}
