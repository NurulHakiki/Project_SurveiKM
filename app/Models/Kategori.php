<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kategori extends Model
{
    use SoftDeletes;
    protected $table = 'kategori';
    protected $primaryKey = 'id_kategori';
    protected $fillable = ['kode_kategori', 'nama_kategori'];
    protected $dates = ['deleted_at'];

    public function sub()
    {
        // $valu_dt = new value_data_uji;
        return $this->hasMany(sub_kategori::class,'id_kategori','id_kategori');
    }
}
