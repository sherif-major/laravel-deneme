<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Birim extends Model
{
    use HasFactory;

    /**
     * İlgili tablo adı.
     */
    protected $table = 'birimler';

    /**
     * Toplu atamaya izin verilen alanlar.
     */
    protected $fillable = [
        'birim_adi',
        'konusu',
    ];
}
