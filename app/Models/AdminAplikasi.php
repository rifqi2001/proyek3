<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminAplikasi extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'admin_aplikasi';
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
