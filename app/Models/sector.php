<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class sector extends Model
{
    protected $fillable = ['company_id','name', 'description', 'image', 'position', 'active', 'slug'];
}
