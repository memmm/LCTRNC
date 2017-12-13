<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
  public static function getTableName()
    {
        return with(new static)->getTable();
    }

    protected $fillable = [
        'name',
        'description',
        'image',
        'country'
    ];
}
