<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\Product;
use App\Services\CatalogService;
use App\Services\ProductService;

class GroupController extends Controller
{

    public CatalogService $catalogService;
    public ProductService $productService;

    public function __construct(CatalogService $catalogService, ProductService $productService)
    {
        $this->catalogService = $catalogService;
        $this->productService = $productService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $categoryTree = $this->catalogService->getCategoryTree($request);

        $products = $this->productService->index($request, $categoryTree['ids']);

        $data = [

            'category' => $categoryTree['category'],
            'products' => $products 
        ];

        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
