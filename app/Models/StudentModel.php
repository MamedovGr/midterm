<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentModel extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
    ];

    protected $fillable = [
        'name',
        'surname',
        'birthday',
        'gender',
    ];

    protected $table = 'students';

    public $timestamps = false;
}
