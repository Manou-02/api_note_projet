<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    protected $fillable = ['numEt', 'nomEt', 'prenomEt', 'idNiveau'];

    public function niveau(){
        return $this->hasOne(Niveau::class, 'id', 'idNiveau');
    }

    use HasFactory;
}
