<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transictiontable extends Model
{
    protected $table = 'buyer_seller_transiction_table';
    public $timestamps = false;
    protected $primaryKey = 'userid';
}
