<?php

namespace App;

// use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

class Crop extends Model
{

    use Notifiable;
    
    public $table = 'crop_info';

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'product_id',
        'name',
        'price',
        'description',
        'uses',
        'image',
        'filename',
    ];

}
