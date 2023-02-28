<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class CarInfo extends Model
{
    use Uuids,SoftDeletes, HasFactory;
    protected $guarded = [];

     public function cars(): ?BelongsTo
    {
       return $this->belongsTo(Car::class);
    }

}
