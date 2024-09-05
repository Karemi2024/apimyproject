<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkEnv extends Model
{
    use HasFactory;
    protected $table = "cat_workenvs";

    protected $fillable = [
        'nameW', 
        'type', 
        'descriptionW',
        'date_start', 
        'date_end', 
        'logicdeleted',
        'idUser'
    ];

    public function userWorkEnvs()
    {
        return $this->hasMany(JoinWorkEnvUser::class, 'idWorkEnv', 'idWorkEnv');
    }
    

}
