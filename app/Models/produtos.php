<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class produtos extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'produtos';
    protected $primaryKey = 'produto_id';
    protected $fillable = ['nome'];

    public function produtos_categorias()
    {
        return $this->belongsTo(categorias::class, 'categoria_id');
    }

    public function produtos_sorteios_produtos()
    {
        return $this->hasMany(sorteios_produtos::class, 'produto_id');
    }
}
