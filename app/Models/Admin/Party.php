<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Party extends Model
{
    /** @use HasFactory<\Database\Factories\Admin\PartyFactory> */
    use HasFactory;
    protected $fillable = ['name', 'slug', 'acronym', 'number', 'image'];

    public function candidates()
    {
        return $this->hasMany(Candidate::class);
    }
}
