<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    protected  $table   = 'settings';

    protected $fillable = ['name_site','email','address','phone','logo','website'];
}
