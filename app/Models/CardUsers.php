<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardUsers extends Model
{
    use HasFactory;
    protected $table = 'rel_cards_users';
    protected $fillabe = [

        'idCard',
        'idJoinUserWork',
        'logicdeleted'
    ];
}
