<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Option extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_center',
        'city',
        'district',
        'location',
        'gender',
        'type',
        'select',
        'select_center',
        'count_home',
        'time_center',
        'free_center',
        'price_center',
        'days_center',
        'maneger_person',
        'phone_maneger',
        'email_maneger',
        'phone_work',
        'phone_mony',
        'about_center',
    ];

}
