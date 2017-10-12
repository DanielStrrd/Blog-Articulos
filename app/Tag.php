<?php

namespace App;

use Illuminate\Database\Eloquent\Scope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Tag extends Model
{
  protected $table = "tags";

  protected $fillable = ['name'];

  public function articles() {

    return $this->belongsToMany('\App\Article')->withTimestamps();
  }

  public function scopeSearch($query, $name) {

    return $query->where('name', 'like', '%'.$name.'%');
  }
  public function scopeSearchTag($query, $name){

    return $query->where('name', 'like', '%'.$name.'%');
  }
}
