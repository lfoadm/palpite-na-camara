<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    /** @use HasFactory<\Database\Factories\Admin\CityFactory> */
    use HasFactory;
    protected $fillable = ['name', 'slug', 'quantity', 'image'];

    // public function candidates()
    // {
    //     return $this->hasMany(Candidate::class);
    // }
}
