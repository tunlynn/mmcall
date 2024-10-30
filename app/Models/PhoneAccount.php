<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PhoneAccount extends Model
{
    public function user() {
        return $this->belongsTo(User::class);
    }
}
