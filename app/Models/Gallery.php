<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = [
        'userId',
        'image',
        'order',
        'status'
    ];

    public function userName()
    {
        return $this->belongsTo(User::class, 'userId');
    }
}
