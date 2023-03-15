<?php

namespace App\Models;

use App\Models\Jawaban;
use App\Models\Pertanyaan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Induk_Pertanyaan extends Model
{
    protected $table = 'induk_pertanyaan';

    protected $primaryKey = 'id';

    protected $guarded = [];

    public $timestamps = false;

    public function answers(): BelongsToMany
    {
        return $this->belongsToMany(Jawaban::class, 'pertanyaan_jawaban', 'pertanyaan_id', 'jawaban_id');
    }
}