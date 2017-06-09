<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $products = Product::all();
        return view("products.index",["products"=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //mandamos a trer la vista que querermos
        //El método se utiliza para mostrar las llaves foraneas en los formularios
        $categories = Category::pluck('name','id');
        //Enviamos en el return el arreglo
        return view("products.create",['categories'=>$categories]);
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
        //PAra guardar el producto
        //de la lado izquierdo es necesario poner el nombre del aatributo como esta en la base de datps
        $product= new Product;
        $product->name = $request->name;
        $product->description=$request->description;
        $product->price = $request->price;
        $product->category_id = $request->category_id;
        $categories = Category::pluck('name','id');
        //Para redireccionar al formulario en caso de no haberse guardado
        if($product->save())
        {
          return redirect('/products');
        }else
        {
          return view('products.create',['categories'=>$categories]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
        return redirect('/products');
    }
}
