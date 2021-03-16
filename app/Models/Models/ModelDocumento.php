<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Model;

class ModelDocumento extends Model
{
    protected $table = 'documento';
    protected $fillable = ['titulo', 'tipo_id', 'nome_arquivo'];

    public function relTipos()
    {
        return $this->hasOne('App\Models\Models\ModelTipo','id', 'tipo_id');
    }
}