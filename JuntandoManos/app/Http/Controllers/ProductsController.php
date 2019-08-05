<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Project;
use App\Organization;

class ProductsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($category = null)
    {
      if ($category) {

      $products = Product::where('category_id', $category)->paginate(6);
      }
      else {
        $products = Product::paginate(6);
      }

      $categories = Category::all();
      $allprojects = Project::all();
      $projects = [];

      return view('front.products.index', compact('products', 'category', 'categories', 'allprojects', 'projects'));
      // return view('front.products.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      // $product = Product::find($id);
      //
      // return view('front.products.show', compact('product'));
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
        //
    }

    public function projectProducts($project_id)
    {

      // $products = Product::where('project_id', $project_id->paginate(12);

      //
      // return view('front.products.index', compact('products', 'category'));
      return view('front.project.index');
    }

    public function search(Request $request)
    {
      $search = $request -> input('search');

      $products = Product::where('name','LIKE',"%$search%")->paginate(6);
      $projects = Project::where('name','LIKE',"%$search%")->paginate(6);

      $categories = Category::all();
      $allprojects = Project::all();

      // return view('front.products.index', compact('products', 'categories', 'allprojects'));
      return view('front.products.index', compact('products', 'categories', 'projects', 'allprojects'));
      // return view('front.products.index');
    }
}
