<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consumer extends Model
{
    protected $table = 'consumers';
    protected $fillable = ['name', 'surname', 'email', 'image'];
    use HasFactory;
}
