<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestModel extends Model
{
    //
    use HasFactory;
    protected $table = 'test';
    protected $connection = 'sqlsrv';
    protected $primaryKey = 'test_id';
    public $incrementing = true;
    public $timestamps = true;

    protected $attributes = ['test_attribute1', 'test attribute2'];
}
