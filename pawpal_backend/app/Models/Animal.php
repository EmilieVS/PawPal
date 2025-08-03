<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Animal extends Model
{
  use HasFactory, Notifiable;
    protected $fillable = [
        'id',
        'owner_id',
        'name',
        'pet_type',
        'description',
        'disease',
        'created_at',
    ];
}
