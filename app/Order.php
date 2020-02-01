<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    public $table = 'tborder';
    protected $guarded = [];
    protected $fillable = [
        'name', 'email', 'notelp', 'alamat', 'name_product', 'platform', 'description',
    ];
    use SoftDeletes;
}