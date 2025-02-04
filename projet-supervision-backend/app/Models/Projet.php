<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'budget_alloue',
        'budget_depense',
        'date_debut',
        'date_fin_prevue',
        'objectif',
        'jour_compte_rendu',
        'risques',
        'user_id',
        'FolderPath',
    ];

    public function membres()
    {
        return $this->hasMany(MembreProjet::class);
    }

    public function taches()
    {
        return $this->hasMany(Taches::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function users()
    {
        // Assurez-vous d'adapter cette relation à votre structure de base de données
        return $this->belongsToMany(User::class);
    }
}
