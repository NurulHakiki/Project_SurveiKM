<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class client extends Model
{
    use SoftDeletes;
    protected $table = 'client';
    protected $primaryKey = 'id_client';
    protected $fillable = ['id_kategori', 'id_sub_kategori','nama_kategori', 'nama_sub_kategori','range'];
    protected $dates = ['deleted_at'];

    public function kategori()
    {
        return $this->belongsTo(kategori::class,'id_kategori','id_kategori');
    }

    public function sub_kategori()
    {
        return $this->belongsTo(kategori::class,'id_sub_kategori','id_sub_kategori');
    }
}
