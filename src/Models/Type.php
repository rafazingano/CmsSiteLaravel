<?php

namespace ConfrariaWeb\CwSiteLaravel\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{

    protected $fillable = [
        'title', 'slug', 'description', 'theme', 'layout', 'view', 'icon', 'status'
    ];

    public function options() {
        return $this->belongsToMany('ConfrariaWeb\CwSiteLaravel\Models\Option')->withPivot('value');
    }
    

    public function categories() {
        return $this->hasMany('ConfrariaWeb\CwSiteLaravel\Models\Category');
    }

}
