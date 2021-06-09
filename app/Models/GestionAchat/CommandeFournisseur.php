<?php

namespace App\Models\GestionAchat;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommandeFournisseur extends Model
{
    use HasFactory;
    protected $fillable = [
        'numero',
        'date',
        'client',
        'netHt',
        'total ttc',
        'total tva',
        'netapayer',
    ];
}
