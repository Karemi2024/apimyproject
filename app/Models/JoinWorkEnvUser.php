<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JoinWorkEnvUser extends Model
{
    use HasFactory;

    protected $table = "rel_join_workenv_users";
    protected $fillabe = [
        'approbed',
        'logicdeleted',
        'privilege',
        'token',
        'idWorkEnv',
        'idUser'
    ];

    public function workEnv()
    {
        return $this->belongsTo(WorkEnv::class, 'idWorkEnv', 'idWorkEnv');
    }
}
