<?php

namespace App\Filters;

use Kyslik\LaravelFilterable\Generic\Filter;

class SomeFilter extends Filter
{

    protected $filterables = ['id', 'name', 'brand', 'price', 'quantity'];
    /**
     * Available Filters and their aliases.
     *
     * @return array ex: ['method-name', 'another-method' => 'alias', 'yet-another-method' => ['alias-one', 'alias-two]]
     */
    public function filterMap(): array
    {
        return ['brand' , 'price', 'quantity'];
    }

    public function brand($brand = null)
    {
        return $this->builder->where('brand', 'like', "%$brand%");
    }

    public function price($price = null)
    {
        return $this->builder->where('price', '=', "$price");
    }

    public function quantity($quantity = null)
    {
        return $this->builder->where('quantity', '=', "$quantity");
    }
}
