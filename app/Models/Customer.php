<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function phoneNumbers()
    {
        return $this->belongsToMany(
            PhoneNumber::class,
            'customer_phone_number',
            'customer_uuid',
            'phone_number_uuid',
            'uuid',
            'uuid',
        );
    }
}
