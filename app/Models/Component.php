<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Component extends Model
{
    protected $fillable = ['name', 'preview_code', 'copy_code', 'creator_id'];
}
