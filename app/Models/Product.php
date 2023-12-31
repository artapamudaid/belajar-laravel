<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['sku', 'category_id', 'name', 'stock'];

    public function category()
    {
        return $this->BelongsTo(Category::class);
    }
}
