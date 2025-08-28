<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unvan extends Model
{
    use HasFactory;

    /**
     * İlgili tablo adı.
     */
    protected $table = 'unvanlar';

    /**
     * Toplu atamaya izin verilen alanlar.
     */
    protected $fillable = [
        'unvan_adi',
    ];
}
