<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contenu extends Model
{
    use HasFactory;

    //nom de la table
    protected $table = 'contenu';

    //pour désactiver "created_at" et "updated_at"
    public $timestamps = false;

    //pour modifier le nom de la PK définie automatique
    protected $primaryKey = 'idContenu';

    protected $fillable = ['titre', 'description', 'date', 'photo'];
}
