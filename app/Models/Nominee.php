<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nominee extends Model
{
    use HasFactory;
    protected $table= 'nominee';
    protected $primaryKey = 'id_nominee';
    public $timestamps = false;

    public function category(){
        return $this->belongsToMany(Category::class,'categories');
    }
}