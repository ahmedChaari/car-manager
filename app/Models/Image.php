<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Image extends Model
{
    use Uuids,SoftDeletes, HasFactory;

    protected $guarded = [];

    public function cars()
    {
        return $this->belongsToMany(Car::class)
                    ->withTimestamps();
    }
}
