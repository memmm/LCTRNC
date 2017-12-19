<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
  public static function getTableName()
    {
        return with(new static)->getTable();
    }

    // public function venue() {
    //   return $this->belongsTo('App\Venue');
    // }

  protected $fillable = [
      'name',
      'startdate',
      'enddate',
      'image',
      'description'
  ];
}
