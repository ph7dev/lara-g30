<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{
    use HasFactory,
        Sluggable,
        SoftDeletes;

    protected $fillable = ['name', 'slug', 'status'];

    public function sluggable(): array
    {
        return [
            'slug' => ['source' => 'name']
        ];
    }
}
