<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class content extends Model
{
    protected $table = 'content';
    public $timestamps = false;
    protected $primaryKey = 'userid';
}
