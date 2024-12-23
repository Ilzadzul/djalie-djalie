<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Package extends Model
{
  use SoftDeletes;

  protected $fillable = [
    'name',
    'thumbnail',
    'description',
    'price',
    'consult_msg',
    'slug',
  ];

  public function setNameAttribute($value)
  {
    $this->attributes['name'] = $value;
    $this->attributes['slug'] = Str::slug($value);
  }

  public function benefits(): HasMany
  {
    return $this->hasMany(PackageBenefits::class);
  }
}
