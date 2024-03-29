<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Codigo extends Model
{
    use HasFactory;

    protected $connection = 'mysql';
    protected $table = 'codigos';


    public function users() {

        return $this->belongsTo('App\Models\User', 'user_id', 'id');

    }
}
