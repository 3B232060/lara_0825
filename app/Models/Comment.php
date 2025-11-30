<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    // 讓 Comment 能找到它屬於哪一篇貼文（單筆）
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
