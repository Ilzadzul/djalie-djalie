<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;


class Service extends Model
{
  use SoftDeletes;

  protected $fillable = ['name'];

  public function contactform(): HasMany
  {
    return $this->hasMany(ContactForm::class);
  }

  public function photos(): HasMany
  {
    return $this->hasMany(ServicePhotos::class);
  }

}