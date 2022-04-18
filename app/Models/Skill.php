<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Anggota;

class Skill extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function anggota()
    {
        return $this->belongsToMany(Anggota::class);
    }

}
