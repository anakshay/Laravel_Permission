<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vedioes extends Model
{
    use HasFactory;
 protected $table = 'vedioes';
    protected $primerykey = 'id';
    protected $fillable = [
        'vedio'
    ];
}
