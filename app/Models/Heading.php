<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Heading extends Model
{

    use HasFactory;
    protected $fillable = [
        'name',
        'lastname',
        'email',
        'company',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function records()
    {
        return $this->belongsToMany(Record::class);
    }
}
