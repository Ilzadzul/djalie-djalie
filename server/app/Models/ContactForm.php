<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContactForm extends Model
{
  use SoftDeletes;
  protected $fillable = [
    'name',
    'email',
    'phone',
    'service_id',
    'message',
  ];

  public function service(): BelongsTo
  {
    return $this->belongsTo(Service::class);
  }
}