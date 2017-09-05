<?php

namespace ConfrariaWeb\CwSiteLaravel\Models;

use Illuminate\Database\Eloquent\Model;

class PostType extends Model
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
