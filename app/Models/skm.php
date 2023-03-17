<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class skm extends Model
{
    use SoftDeletes;
    protected $table = 'skm';
    protected $primaryKey = 'id_skm';
    protected $fillable = ['id_sub_kategori','range'];
    protected $dates = ['deleted_at'];

    public function sub_kategori()
        {
            return $this->belongsTo(SubKategori::class,'id_skm','id_sub_kategori');
        }
}
