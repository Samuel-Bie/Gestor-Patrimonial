<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Universidade extends Model
{
    use SoftDeletes;
    protected $table        = 'my_flights';
    protected $primaryKey   = "";
    protected $perPage      = 15;
    protected $dates        = ['deleted_at'];
}