<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SysRelatProdutividade extends Model
{
    use HasFactory;
    protected $table ='sys_relatorios';
    protected $fillable = [
        'nome',
        'setor',
        'feito' ,
        'nfeito',
        'produtividade',     

    ];
}
