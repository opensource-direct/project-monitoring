<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reminder extends Model
{
    use HasFactory;

    protected $table = 'reminder';

    protected $fillable = [
        'reminder_title',
        'reminder_detail',
        'created_by',
        'status_notes'
    ];
}
