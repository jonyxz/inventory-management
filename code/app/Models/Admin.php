<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'password',
        'email',
        'created_at',
        'updated_at'
    ];

    public function items()
    {
        return $this->hasMany(Item::class);
    }
}