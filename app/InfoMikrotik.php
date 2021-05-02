<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InfoMikrotik extends Model
{
   public function UserMikrotik()
   {
       return $this->belongsTo(UserMikrotik::class);
   }
}
