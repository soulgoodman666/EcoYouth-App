<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanaman extends Model
{
    protected $table = 'plants';

    protected $fillable = ['nama', 'jenis', 'umur', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

