<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'jumlah', 'total' ,'tipe', 'description', 'status', 'user_id', 'layanans_id'];

    public static function getStatusOptions()
    {
        return [
            'Belum Dikonfirmasi' => 'Belum Dikonfirmasi',
            'Dikonfirmasi' => 'Dikonfirmasi',
            'Dibatalkan' => 'Dibatalkan',
        ];
    }

    public function setStatus($status)
    {
        if (in_array($status, array_keys($this->getStatusOptions()))) {
            $this->status = $status;
            $this->save();
        }
    }

    public function layanan()
    {
        return $this->belongsTo(Layanan::class, 'layanans_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
