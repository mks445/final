<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $fillable=['user_id','name','description','category_id'];

protected $guarded=[];




    public function category()
    {
        return $this->hasOne(Category::class, 'id','category_id');
    }
}


