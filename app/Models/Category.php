<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    /**
     * Get all of the posts for the Category
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */

    protected $fillable = [
        'name',
        'slug',
    ];
    
    public function posts()
    {
        return $this->hasMany(Post::class, 'category_id', 'id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
