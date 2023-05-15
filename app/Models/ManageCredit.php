<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManageCredit extends Model
{
    use HasFactory;

     protected $fillable = [
        'no_of_credit',
        'euro_amount'
    ];
}
