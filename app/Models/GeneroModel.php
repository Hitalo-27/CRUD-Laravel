<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneroModel extends Model
{
    use HasFactory;

    protected $table = "tbGenero";

    public $timestamps = false;
    protected $fillable=['genero', 'sugestao', 'diretor'];

    protected $primaryKey = 'idGenero';
}
