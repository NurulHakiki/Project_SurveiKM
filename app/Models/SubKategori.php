<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubKategori extends Model
{
    use SoftDeletes;
    protected $table = 'sub_kategori';
    protected $primaryKey = 'id_sub_kategori';
    protected $fillable = ['id_kategori', 'kode_sub_kategori', 'nama_sub_kategori'];
    protected $dates = ['deleted_at'];

    public function kategori()
    {
        return $this->belongsTo(kategori::class,'id_kategori','id_kategori');
    }
}