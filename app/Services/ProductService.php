<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductService
{

    public function index(Request $request, $categoryIds){
        
        $query = Product::join('prices', 'products.id', '=', 'prices.id_product') 
                         ->select('products.*', 'prices.price');

        if ( count($categoryIds) > 0 ) {
        
            $query->whereIn('id_group', $categoryIds);
        }                         
        
        if ( $request->has('sort_by') AND $request->has('sort_order') ) {
           
            $query->orderBy($request->sort_by , $request->sort_order );
        }
        
        return $query->paginate(5);
    }
 
}