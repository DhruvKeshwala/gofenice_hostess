<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'payment_id',
        'amount',
        'status'
    ];

    public function userName()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
