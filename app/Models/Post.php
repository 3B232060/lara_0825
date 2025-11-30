<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // 設定可以批量賦值的欄位
    protected $fillable = [
        'title',
        'content',
        'is_feature',
    ];

    // 讓 Post 能抓到所有它的評論（多筆）
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
