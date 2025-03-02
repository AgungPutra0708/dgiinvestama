<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class home extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "homes";

    protected $guarded = [];
}
