<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class categorias extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'categorias';
    protected $primaryKey = 'categoria_id';
    protected $fillable = ['nome'];

    public function categorias_produtos()
    {
        return $this->hasMany(produtos::class, 'categoria_id');
    }
}
