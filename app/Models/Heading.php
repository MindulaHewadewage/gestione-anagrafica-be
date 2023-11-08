<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Heading extends Model
{

    use HasFactory;
    protected $fillable = [
        'user_id',
        'name',
        'lastname',
        'email',
        'company',
    ];

    public function records()
    {
        return $this->belogsToMany(Record::class);
    }
}
