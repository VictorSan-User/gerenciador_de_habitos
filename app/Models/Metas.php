<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Metas extends Model
{
    protected $table = 'metas';

    protected $fillable = [
        'titulo',
        'descricao',
        'data_inicio',
        'data_fim',
        'status'
    ];
}
