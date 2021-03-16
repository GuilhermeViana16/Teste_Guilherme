<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelTipo extends Model
{
    protected $table = 'tipo';

    public function relDocumentos()
    {
        return $this->hasMany('App\Models\Models\ModelDocumento','tipo_id');
    }
}
