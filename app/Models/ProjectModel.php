<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectModel extends Model
{
    use HasFactory;

    protected $table = 'project';
    protected $primarykey = 'id';

    protected $fillable = [
        'id',
        'project_name'
    ];
}
