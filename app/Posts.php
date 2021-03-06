<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    //
    public $timestamps = true;
    protected $fillable = [
        'title',
        'description',
        'detail',
        'thumbs',
        'category_id',
        'position',
        'status',
        'data_pubblic',
    ];
    protected $casts = [
        'position' => 'array',
    ];
    protected $primaryKey = 'id';
    protected $table = 'posts';
}
