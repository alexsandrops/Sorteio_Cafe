<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class sorteios extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'sorteios';
    protected $primaryKey = 'sorteio_id';
    protected $fillable = ['users_id', 'datas_id', 'compras_final', 'status'];

    public function sorteios_users()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    public function sorteios_data_sorteios()
    {
        return $this->belongsTo(data_sorteios::class, 'datas_id');
    }

    public function sorteios_sorteios_produtos()
    {
        return $this->hasMany(sorteios_produtos::class, 'sorteio_id');
    }
}
