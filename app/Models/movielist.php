<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class movielist extends Model
{
    protected $table = 'movielist';
    public $timestamps = false;
    protected $primaryKey = 'userid';
}
