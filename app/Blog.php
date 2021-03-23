<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //
    public $timestamps = true;
    protected $fillable = [
        'title',
        'des',
        'detail',
        'thumbs',
        'category',
        'position',
        'public',
        'data_pubblic',
    ];
    protected $casts = [
        'position' => 'array',
    ];
    protected $primaryKey = 'id';
    protected $table = 'blogs';
}
