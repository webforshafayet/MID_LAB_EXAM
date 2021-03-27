<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userlist extends Model
{
    protected $table = 'userlist';
    public $timestamps = false;
    protected $primaryKey = 'userid';
}

