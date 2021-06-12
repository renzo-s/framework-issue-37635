<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PhoneNumber extends Model
{
    protected $touches = ['customers'];

    public function customers()
    {
        return $this->belongsToMany(
            Customer::class,
            'customer_phone_number',
            'phone_number_uuid',
            'customer_uuid',
            'uuid',
            'uuid',
        );
    }
}
