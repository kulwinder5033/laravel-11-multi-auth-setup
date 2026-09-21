<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cases extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'image',
        'pdf_file',
        'order',
        'publish',
        'status',
    ];
}
