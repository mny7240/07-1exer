<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    // テーブル名
    protected $table = 'blogs';    // table と Blog が紐づけられた
    
    // 可変項目
    protected $fillable =
    [
        'title',
        'content'
    ]
    
    use HasFactory;
}

