<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class swimming_pool_leads_database extends Model
{
    //
    protected $fillable=['firstname','lastname','phone','address','city','state','county', 'zip', 'age', 'email', 'timezone', 'gender'];

}
