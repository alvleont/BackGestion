<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contract extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable=[
        'company_id',
        'responsible_id',
        'external_contact_id',
        'status',
        'start_date',
        'end_date',
        'max_hours_cycle',
        'max_weekly_meetings',
        'invoice_mode',
        'price_per_hour',
        'price_per_cycle',
    ];




}
