<?php

namespace ConfrariaWeb\CwSiteLaravel\Models;

use Illuminate\Database\Eloquent\Model;

class PostCategory extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'slug', 'content',
    ];

}
