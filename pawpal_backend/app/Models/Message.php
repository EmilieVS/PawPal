<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Message extends Model
{
    use HasFactory, Notifiable;

     protected $fillable = [
        'id',
        'sender_id',
        'recipient_id',
        'subject',
        'body',
        'sent_at',
        'is_read',
    ];
}
