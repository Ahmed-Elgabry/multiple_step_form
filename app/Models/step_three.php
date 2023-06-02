<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Option;

class step_three extends Model
{
    use HasFactory;

    protected $fillable = [
        'upload_formal',
        'upload_center',
        'name_bank',
        'ipan',
    ];

    public function stepOne()
    {
        return $this->belongsTo(Option::class);
    }
}
