<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Category extends Model
{
    use SoftDeletes;
    //
    protected $table = "categories";
    protected $dates = ['deleted_at'];
    public function product()
    {
        return $this->hasMany('App\Models\Product','id_category','id');
    }
}
