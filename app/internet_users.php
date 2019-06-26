<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class internet_users extends Model
{
    //
    protected $fillable=['firstname','lastname','phone','address','city','state','county', 'zip', 'age', 'email', 'timezone', 'gender'];

}
