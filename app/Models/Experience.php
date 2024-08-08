<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;
    protected $fillable = [
        "title",
        "name",
        "level",
        "title",
        "icon",
        "date_from",
        "date_to",
        "short_description",
        "type",

    ];
}
