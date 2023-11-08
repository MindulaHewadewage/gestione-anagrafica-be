<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'lastname',
        'email',
        'address',
        'tax_id',
        'vat_number',
        'phone',
        'role',
        'avalaible',
    ];

    public function headings()
    {
        return $this->belogsToMany(Heading::class);
    }
}
