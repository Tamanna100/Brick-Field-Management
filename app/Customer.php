<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public $timestamps = false;

    protected $table = 'customers';

    protected $fillable = [
       'customer_name', 'age','gender','memeber_type','company_name',
    ];
}
