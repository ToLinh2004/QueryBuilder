<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $hidden = ['updated_at'];
    use HasFactory;
    public function getCreatedAtAttribute($value)
    {
        return date('d, l F Y', strtotime($value));
    }
    public function getStatusAttribute($value)
    {
        return (bool)$value;
    }
}
