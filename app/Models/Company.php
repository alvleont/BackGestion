<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'document',
        'email',
        'telephone',
        'address',
        'is_provider',
        'is_client'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class,'company_users')->withPivot('status', 'position');
    }

}
