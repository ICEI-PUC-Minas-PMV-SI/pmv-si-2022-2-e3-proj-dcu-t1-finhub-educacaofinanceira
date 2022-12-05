<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Influencers extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nome',
        'linkInstagram',
        'linkTwitter',
        'linkYoutube',
        'linkSite',
        'image',
        'descricao'
    ];
}
