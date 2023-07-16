<?php

namespace App;

// use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

class Pesticides extends Model
{

    public $table = 'pesticides_info';

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'name',
        'price',
        'description',
        'uses',
        'images',
        'filename',
    ];

}
