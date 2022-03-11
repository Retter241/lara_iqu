<?php

namespace App\Filters;

class PartFilter extends QueryFilter
{
    public function category($categoryIds)
    {
        return $this->builder->whereIn('category_id', $this->paramToArray($categoryIds));
    }

    public function manufacturer($manufacturerIds)
    {
        return $this->builder->whereIn('manufacturer_id', $this->paramToArray($manufacturerIds));
    }

    public function price_min($price_min)
    {
       return $this->builder->where('price', '>', $price_min);
    }

    public function price_max($price_max)
    {
       return $this->builder->where('price', '<', $price_max);
    }

    public function weight_min($weight_min)
    {
       return $this->builder->where('weight', '>', (int)$weight_min);
    }

    public function weight_max($weight_max)
    {
       return $this->builder->where('weight', '<', (int)$weight_max);
    }

    public function search($keyword)
    {
        return $this->builder->where('title', 'like', '%'.$keyword.'%');
    }

    public function price($order = 'asc')
    {
        return $this->builder->orderBy('price', $order);
    }
}