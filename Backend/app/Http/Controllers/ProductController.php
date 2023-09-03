<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
            $products = Product::all();    
            return response()->json([
                'results' => $products
            ], 200);}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $products = new Product();
        $products->category_id = $request->category_id;
        $products->name = $request->name;
        $products->price = $request->price;        
        $products->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $products = Product::find($id);
        if(!$products){
            return response()->json([
                'message' => 'No se encontro el producto'
            ], 404);
        }
        // Return Json Response
       return response()->json([
        'products' => $products
     ],200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            // Find Product
            $products = Product::find($id);
            if(!$products){
              return response()->json([
                'message'=>'Producto no encontrado.'
              ],404);
            }
       
            $products->category_id = $request->category_id;
            $products->name = $request->name;
            $products->price = $request->price;  
       
            // Update Product
            $products->save();
       
            // Return Json Response
            return response()->json([
                'message' => "Product editado con exito."
            ],200);
        } catch (\Exception $e) {
            // Return Json Response
            return response()->json([
                'message' => "No se pudo editar el producto."
            ],500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $products = Product::find($id);
        if(!$products){
            return response()->json([
                'message' => 'No se encontro el producto'
            ], 404);
        }
        $products->delete();
        return response()->json([
            'message' => 'Producto eliminado con exito'
        ], 200);
    }
}
