<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class PackageBenefits extends Model
{
  use SoftDeletes;
  protected $fillable = [
    'description',
    'package_id',
  ];

  public function package(): BelongsTo
  {
    return $this->belongsTo(Package::class);
  }
}
