<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller {
  public function index() {
    $products = Product::paginate(5);

    return view('admin.products.index')->with(compact('products')); //listado
  }

  public function create() {
    return view('admin.products.create'); //formulario de creación
  }

  public function store(Request $request) {
    //dd($request->all());
    // registrar el nuevo producto en la base de datos
    $product                   = new Product();
    $product->name             = $request->input('name');
    $product->description      = $request->input('description');
    $product->price            = $request->input('price');
    $product->long_description = $request->input('long_description');
    $product->save();

    return redirect(route('admin.products.index'));
  }

  public function edit($id) {
    $product = Product::find($id);

    return view('admin.products.edit', compact('product')); //formulario de creación
  }

  public function update(Request $request, $id) {
    //dd($request->all());
    // registrar el nuevo producto en la base de datos
    $product                   = Product::find($id);
    $product->name             = $request->input('name');
    $product->description      = $request->input('description');
    $product->price            = $request->input('price');
    $product->long_description = $request->input('long_description');
    $product->save();

    return redirect(route('admin.products.index'));
  }

  public function destroy($id) {
    $product = Product::find($id);
    $product->delete();

    return back(); //formulario de creación
  }
}