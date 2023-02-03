<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;
    protected $fillable = ['category' , 'name', 'image', ];

    public function index(){
        return $this->hasMany(Project::class);
    }
}
