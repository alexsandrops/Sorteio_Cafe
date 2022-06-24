<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class sorteios_produtos extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'sorteios_produtos';
    protected $primaryKey = 'sorteio_produtos_id';
    protected $fillable = ['sorteio_id', 'produto_id'];

    public function sorteios_produtos_produtos()
    {
        return $this->belongsTo(produtos::class, 'produto_id');
    }

    public function sorteios_produtos_sorteios()
    {
        return $this->belongsTo(sorteios::class, 'sorteio_id');
    }
}
