<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Date extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'date', 'ville', 'cp', 'commentaire', 'user_id'
    ];

}
