<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory,
        Sluggable,
        SoftDeletes;

    protected $fillable = ['name', 'description', 'price', 'category_id', 'brand_id', 'status', 'cover'];

    public function sluggable(): array
    {
        return [
            'slug' => ['source' => 'name']
        ];
    }
}
