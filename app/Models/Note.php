<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable = ['numEt', 'idMat', 'note'];

    public function etudiant(){
        return $this->hasOne(Etudiant::class, 'id', 'numEt');
    }

    public function matiere(){
        return $this->hasOne(Matiere::class, 'id', 'idMat');
    }
    
    use HasFactory;
}
