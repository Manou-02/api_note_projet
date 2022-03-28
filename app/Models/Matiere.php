<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
    protected $fillable = ['designMat', 'coefMat'];
    public function notes(){
        return $this->belongsTo(Note::class);
    }
    use HasFactory;
}
