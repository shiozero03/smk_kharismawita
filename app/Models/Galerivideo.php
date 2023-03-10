<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galerivideo extends Model
{
    use HasFactory;
    protected $table = 'galerivideos';
    protected $primarykey = 'id';
    protected $fillable = [
        'video',
        'judul'
    ];
}
