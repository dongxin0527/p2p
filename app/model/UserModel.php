<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    public $primaryKey = "uid";
    public $table= "user";
    public $timestamps = false;
}
