<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notebook extends Model
{
    use HasFactory;

    protected $table = 'notebooks';

    protected $fillable = [
        'full_name',
        'company',
        'telephone',
        'email',
        'date_of_birth',
        'image',
    ];
}
