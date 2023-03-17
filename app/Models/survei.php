<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class survei extends Model
{
    use SoftDeletes;
    protected $table = 'survei';
    protected $primaryKey = 'id_client';
    protected $fillable = ['range'];
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
