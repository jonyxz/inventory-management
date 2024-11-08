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
        'price',
        'quantity',
        'category_id',
        'supplier_id',
        'created_by',
        // 'created_at',
        // 'updated_at'
    ];
    public function items()
    {
        return $this->hasMany(Item::class);
    }

    public function Suppliers()
    {
        return $this->belongsToMany(Supplier::class);
    }
}
