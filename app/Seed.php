<?php

namespace App;

// use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

class Seed extends Model
{

    public $table = 'seed_info';

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'name',
        'price',
        'company',
        'uses',
        'image',
        'filename',
    ];

}
