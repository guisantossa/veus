<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;
use Kyslik\LaravelFilterable\Filterable;

class Product extends Model
{
    use Sortable;
    use Filterable;
    protected $guarded  = [];

    public $sortable = ['name', 'brand', 'quantity', 'price'];
    

}
