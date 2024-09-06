<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notifications extends Model
{
    use HasFactory;
    protected $table = 'cat_notifications';
    protected $fillabe = [
        'title',
        'description',
        'content',
        'seen',
        'logicdeleted',
        'idUser'
    ];
}
