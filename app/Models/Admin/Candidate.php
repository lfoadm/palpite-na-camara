<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    /** @use HasFactory<\Database\Factories\Admin\CandidateFactory> */
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
        'short_name',
        'caption_number',
        'status',
        'description',
        'featured',
        'image',
        'party_id',
        'city_id',
    ];

    public function party()
    {
        return $this->belongsTo(Party::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    // public function orderItems()
    // {
    //     return $this->hasMany(OrderItem::class);
    // }
}
