<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ServicePhotos extends Model
{
  protected $fillable = [
    'photo',
    'service_id',
  ];

  public function package(): BelongsTo
  {
    return $this->belongsTo(Service::class);
  }
}
