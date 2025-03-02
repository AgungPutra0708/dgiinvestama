<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class partner extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "partners";

    protected $guarded = [];
}
