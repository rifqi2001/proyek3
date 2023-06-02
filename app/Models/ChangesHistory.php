<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChangesHistory extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'changes_histories';
}
