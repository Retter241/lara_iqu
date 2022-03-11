<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Filters\QueryFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    use HasFactory;

    public function manufacturer()
    {
         return $this->hasOne('App\Models\Manufacturer', 'id', 'manufacturer_id');
    }

    public function category()
    {
         return $this->hasOne('App\Models\Category', 'id', 'category_id');
    }

    public function scopeFilter(Builder $builder, QueryFilter $filters)
    {
        return $filters->apply($builder);
    }
}
