<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable =['title','body'];

    public function user(){
        return $this->belongTo(User::class);
    }
    
    public function setTitleAttribute($value)
    {
        $this->attribute['title']=$value;
        $this->attribute['slug']=Str::slug($value);
    }
}
