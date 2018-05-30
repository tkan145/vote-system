<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vote extends Model {

  protected $fillable = ['title', 'description'];
  //use SoftDeletes;
}