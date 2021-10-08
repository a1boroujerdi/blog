<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table='categories';
    protected $fillable=['name','parent_id','subject'];
    public function parent()
    {
        return $this->belongsTo(Category::class,'parent_id');
    }
    public function Children(){
        return $this->hasMany(Category::class,'parent_id','id');
    }
}
