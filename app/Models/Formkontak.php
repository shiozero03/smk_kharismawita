<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formkontak extends Model
{
    use HasFactory;
    protected $table = 'formkontaks';
    protected $primarykey = 'id';
    protected $fillable = [
        'nama',
        'email',
        'subject',
        'phone',
        'message'
    ];
}
