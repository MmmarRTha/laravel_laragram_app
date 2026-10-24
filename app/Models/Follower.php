<?php

namespace App\Models;

use Database\Factories\FollowerFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['user_id', 'follower_id'])]
class Follower extends Model
{
    /** @use HasFactory<FollowerFactory> */
    use HasFactory;
}
