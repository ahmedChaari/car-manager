<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use Uuids,SoftDeletes, HasFactory;

    protected $guarded = [];

    public function car(): ?BelongsTo
    {
        return $this->belongsTo(Car::class);
    }

    public function user(): ?BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
