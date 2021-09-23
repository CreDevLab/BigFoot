<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Tags\HasTags;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;
    use HasTags;

    protected $fillable = ["filename", "url"];
}
