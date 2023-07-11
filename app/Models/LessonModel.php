<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LessonModel extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
    ];

    protected $table = 'lessons';

    protected $fillable = [
        'season_id',
        'course_id',
        'classroom_id',
        'teacher_id',
    ];
    public $timestamps = false;
}
