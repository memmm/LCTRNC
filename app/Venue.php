<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
  public static function getTableName()
    {
        return with(new static)->getTable();
    }
}
