<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class tasks extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'tasks';
    protected $fillable = [
        'title',
        'due_date',
        'is_completed',
        'assigned_to',
        'project_id'
    ];

    public function project()
    {
        return $this->belongsTo(Projects::class);
    }

}