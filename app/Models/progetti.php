<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class progetti extends Model
{

    protected $fillable = ['nome', 'descrizione', 'tipologia', 'linguaggioSviluppo', 'stato', 'user_id'];
    use HasFactory;










   

    public function attivita(): HasMany // Assicurati di utilizzare HasMany come tipo di ritorno
    {
        return $this->hasMany(attivita::class, 'progetto_id');
    }
}