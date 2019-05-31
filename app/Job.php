<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    //USER CLASS
    /*one to one
    *Defining The Inverse Of The Relationship
    *
    */
    public function posted_by()
    {
      return $this->belongsTo(User::class);
    }
    // CATEGORY CLASS
    /*one to one
    *Defining The Inverse Of The Relationship
    *
    */
    public function category()
    {
    return $this->belongsTo(Category::class);
    }
}
