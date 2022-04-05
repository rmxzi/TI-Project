<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FileUpload extends Model
{
    protected  $table   = 'file_uploads';

    protected $fillable = ['name','file','type','user_id'];
}
