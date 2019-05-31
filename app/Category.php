<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // JOB CLASS
    /*one to many
    *Defining one to many Of The Relationship
    *
    */
    public function jobs()
    {
      return $this->hasMany(Job::class);
    }
}
