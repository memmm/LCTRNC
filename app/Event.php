<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Venue;

class Event extends Model
{
  public static function getTableName()
    {
        return with(new static)->getTable();
    }

    public function venue() {
      return $this->belongsTo('Venue', 'venue_name');
    }

    public function users() {
      return $this->belongsToMany('App\User');
    }

    public function artists() {
      return $this->belongsToMany('App\Artist');
    }

  protected $fillable = [
      'name',
      'startdate',
      'enddate',
      'image',
      'description',
      'venue_name'
  ];
}
