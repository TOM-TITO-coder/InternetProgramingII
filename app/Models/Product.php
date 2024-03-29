<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;
    public function categoryName(): BelongsTo //M->1
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }
}
