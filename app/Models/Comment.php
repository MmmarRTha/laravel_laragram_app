<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['user_id', 'post_id', 'comment'])]
class Comment extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class)->select(['name', 'username']);
    }
}
