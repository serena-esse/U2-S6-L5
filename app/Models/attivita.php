<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class attivita extends Model
{
    use HasFactory;
     protected $fillable = ['nomeAttivita' , 
     'descrizioneAttivita' , 
     'statoAttivita' , 
     'progetti_id' ,
    'id'];

    public function progetti(): BelongsTo
    {
        return $this->belongsTo(progetti::class , 'progetti_id');
    }
}