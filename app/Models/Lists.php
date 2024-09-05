<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lists extends Model
{
    use HasFactory;
    protected $table = 'cat_lists';
    protected $fillabe = [

        'nameL',
        'descriptionL',
        'colorL',
        'logicdeleted',
        'idBoard'
    ];
}
