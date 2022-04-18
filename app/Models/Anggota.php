<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\skill;

class Anggota extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function skills()
    {
        return $this->belongsToMany(Skill::class);
    }
}
