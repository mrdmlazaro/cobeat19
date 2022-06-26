<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Tracing extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'days_monitored',
        'address',
    ];
}