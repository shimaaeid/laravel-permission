<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conference extends Model
{
    use HasFactory;


    protected $table = "conferences";
    protected $fillable = [
        'date',
        'time',
        'duration',
        'subject',
        'venue_id',
        'attendee_id'
    ];
    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public $timestamp = false;
}
