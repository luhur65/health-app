<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class CeritaMental extends Model
{
    use HasFactory;

    protected $fillable = [
        'kodecerita',
        'judul',
        'slug',
        'deskripsi',
        'narasi',
        'pesan',
    ];

    public function user() 
    {
        return $this->belongsTo(User::class, 'userId', 'id');
    }

    public function getCreatedAt()
    {
        App::setLocale('id');
        return \Carbon\Carbon::parse($this->attributes['created_at'])
            ->translatedFormat('l, d F Y');
    }
}
