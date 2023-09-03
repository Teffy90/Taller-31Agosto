<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories=Category::all();
        return response()->json([
            'results'=>$categories
        ],200);
    }

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
        $category= new Category();
        $category->name=$request->name;
        $category->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $categories=Category::find($id);
        if(!$categories){
            return response()->json([
                'message'=>'No se encontro la categoria'
            ],404);
        }
        return response()->json([
            'results'=>$categories
        ],200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       try {
        $categories=Category::find($id);
        if(!$categories){
            return response()->json([
                'message'=>'No se encontro la categoria'
            ],404);
        }
        $categories->name=$request->name;
        $categories->save();
        return response()->json([
            'results'=>$categories
        ],200);
       } catch (\Throwable $th) {
           //throw $th;
           return response()->json([
               'message'=>'No se pudo actualizar la categoria'
           ],500);
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $categories=Category::find($id);
        if(!$categories){
            return response()->json([
                'message'=>'No se encontro la categoria'
            ],404);
        }
        $categories->delete();
        return response()->json([
            'message'=>'Categoria eliminada con exito'
        ],200);

    }
}
