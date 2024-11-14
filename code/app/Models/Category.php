<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'created_by',
    ];
    
    public function admin()
    {
        return $this->belongsTo(Admin::class, 'created_by');
    }

    public function items()
    {
        return $this->hasMany(Item::class, 'category_id');
    }
}
