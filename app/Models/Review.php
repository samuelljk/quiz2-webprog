<?php

namespace App\Models;

use App\Models\Hotel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Review extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
