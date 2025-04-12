<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable,softDeletes;
    protected $keyType = 'string';
    public $incrementing = false;
    protected $table = 'users'; 
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'roles'
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // 🔗 Relasi ke tasks yang ditugaskan ke user
    public function tasks()
    {
        return $this->hasMany(tasks::class, 'assigned_to');
    }

    // 🔗 Relasi ke audit log
    public function audits()
    {
        return $this->hasMany(Audit::class);
    }

    // 🔐 Biar password otomatis dihash
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }




    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}