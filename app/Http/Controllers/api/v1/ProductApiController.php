<?php

namespace App\Http\Controllers\api\v1;

use Illuminate\Http\Request;
use App\Product;
use App\Filters\SomeFilter;


class ProductApiController extends Controller
{
    public function index(Request $request, SomeFilter $filters) {
        $q = $request->q;

       
        if (!is_null($q)) {
            $products = Product::where('products.name', 'like', '%'.$q.'%')
                                ->where('products.deleted', '=', '0')
                                ->filter($filters)
                                ->get();

        } else {
            $products = Product::where('products.name', 'like', '%'.$q.'%')
                                ->where('products.deleted', '=', '0')
                                ->filter($filters)
                                ->get();

        }
        return response()->json($products);

    }
}
