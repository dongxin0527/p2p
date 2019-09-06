<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = "user";
    protected $primaryKey = "uid";
    public $timestamps = false;
    protected $guarded = [];
}
