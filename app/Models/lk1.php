<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class lk1 extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'tb_lk1';
    protected $dates = ['deleted_at'];
}
