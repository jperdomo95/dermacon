<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $guarded = [];

    public function patients()
    {
      return $this->belongsToMany(Patient::class)
        ->withPivot('date', 'motive')
        ->as('appointment');
    }
}
