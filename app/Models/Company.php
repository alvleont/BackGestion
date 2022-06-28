<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    public function contracts(){
        return $this->hasMany(Contract::class);
    }

    public function scopeIamattached($query){
        return $query->whereRelation('users','user_id',auth()->user()->id);
    }



}
