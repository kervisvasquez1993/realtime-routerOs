<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InfoMikrotik extends Model
{
    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function infoMikrotik()
    {
        return $this->hasOne(InfoMikrotik::class);
    }
}
