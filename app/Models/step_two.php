<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Option;


class step_two extends Model
{
    use HasFactory;

    protected $fillable = [
        'fname',
        'lname',
        'nationality',
        'age',
        'freeServeStepTwo',
        'paidServeStepTwo',
        'type_msg',
        'service_msg',
        'time_work',
        'daysswork',
        'goto',
        'experinse',
        'upload',
    ];


    public function stepOne()
    {
        return $this->belongsTo(Option::class);
    }
}
