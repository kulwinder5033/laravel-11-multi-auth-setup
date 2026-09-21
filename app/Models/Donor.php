<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    use HasFactory;

    protected $fillable = [
        'receipt_no',
        'name',
        'amount',
        'email',
        'phone',
        'pan_number',
        'cause',
        'donation_date'
    ];
}
