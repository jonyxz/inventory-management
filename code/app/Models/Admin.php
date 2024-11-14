<?php

namespace App\Models;

use Filament\Models\Contracts\FilamentUser;
use Filament\Models\Contracts\HasName;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable implements FilamentUser, HasName
{
     /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'password',
        'email',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function categories()
    {
        return $this->hasMany(Category::class, 'created_by');
    }

    public function suppliers()
    {
        return $this->hasMany(Supplier::class, 'created_by');
    }

    public function items()
    {
        return $this->hasMany(Item::class,'created_by');
    }

    public function canAccessPanel($panel): bool
    {
        return true;
    }

    public function getFilamentName(): string
    {
        return $this->username;
    }
}