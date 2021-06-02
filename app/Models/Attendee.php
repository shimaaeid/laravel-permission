<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendee extends Model
{
    use HasFactory;


    protected $table = "attendees";
    protected $fillable = [
        'attendee_name',
        'mobile',
        'side'
    ];
    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public $timestamp = false;
}
