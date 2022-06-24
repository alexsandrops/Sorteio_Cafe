<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class data_sorteios extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'data_sorteios';
    protected $primaryKey = 'datas_id';
    protected $fillable = ['data_inicio', 'data_fim'];

    public function data_sorteios_sorteios()
    {
        return $this->hasMany(sorteios::class, 'datas_id');
    }
}
