<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Audit extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'audits';
    protected $fillable = 
    [
        'event',
        'auditable',
        'old_values',
        'new_values',
        'users_id',          
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}