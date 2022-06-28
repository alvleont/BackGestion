<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Builder;

class Meeting extends Model
{
    protected $fillable=[
        'organizer_id',
        'participants',
        'meeting_date',
        'type',
        'description',
        'meeting_order',
        'meeting_data',
        'status',
        'minutes',
        'commitments'
    ];

    protected $casts=[
        'participants'=>'array',
        'meeting_order'=>'array',
        'commitments'=>'array'
    ];

    public function organizer(){
        return $this->belongsTo(User::class,'organizer_id');
    }

    public function scopeIamin($query){
        return $query->whereJsonContains('participants', ['participant_id'=>strval(auth()->user()->id)] );

    }
    use HasFactory, SoftDeletes;


}
