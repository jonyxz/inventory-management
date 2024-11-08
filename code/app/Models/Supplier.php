<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'contact_info', 'created_by'];

    public function items()
    {
        return $this->hasMany(Item::class);
    }

    public function categorys()
    {
        return $this->belongsToMany(Category::class);
    }
}
