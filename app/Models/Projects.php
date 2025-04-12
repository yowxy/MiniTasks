<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Projects extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'projects';
    protected $fillable = 
    [
        'name',
        'start_date',
        'is_active',
        'metadata',
        'file_path',
        'department_id'
    ];

    public function departments()
    {
        return $this->belongsTo(Departments::class);
    }
}