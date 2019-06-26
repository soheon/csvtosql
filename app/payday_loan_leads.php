<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class payday_loan_leads extends Model
{
    //
    protected $fillable=['firstname','lastname','phone','address','city','state','county', 'zip', 'age', 'email', 'timezone', 'gender'];

}
