<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    use Uuids,SoftDeletes, HasFactory;

    protected $guarded = [];

    public function user(): ?BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // public function carInfos(): ?HasMany
    // {
    //     return $this->hasMany(CarInfo::class);
    // }

    public function carInfo(): HasOne
    {
        return $this->hasOne(CarInfo::class);
    }

    public function country(): ?BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

    public function transactions(): ?HasMany
    {
        return $this->hasMany(Transaction::class);
    }
}
