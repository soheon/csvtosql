<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Csv extends Model
{
    protected $table = "csvdata";
    protected $fillable=['firstname','lastname','phone','address','city','state','county', 'zip', 'age', 'email', 'timezone', 'gender'];
}
