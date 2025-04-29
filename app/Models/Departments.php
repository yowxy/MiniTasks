<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Departments extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'departments';   
    
    protected $fillable =
    [
        'name',
        'description'
    ];

    // Relasi ke projects
    public function projects()
    {
        return $this->hasMany(Projects::class);
    }

}