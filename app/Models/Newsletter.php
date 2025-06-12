<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    /** @use HasFactory<\Database\Factories\NewsletterFactory> */
    use HasFactory;


    protected $table = 'newsletters';

    protected $fillable = [
        'email',
        'subscribed_at',
    ];

    public $timestamps = false;
}
