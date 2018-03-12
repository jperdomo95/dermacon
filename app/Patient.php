<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $guarded = [];

    public function doctors()
    {
      return $this->belongsToMany(Doctor::class, 'appointments', 'patients_id', 'doctors_id')
        ->as('appointments')->orderBy('date', 'desc');
    }
}
