<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        "title",
        "title_type",
        "short_description",
        "description",
        "link",
        "image",

    ];
}
