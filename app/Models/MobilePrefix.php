<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MobilePrefix extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['prefix'];
}
