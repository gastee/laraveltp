<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Project;
use App\Organization;
use Auth;

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

      $products = Product::where('category_id', $category)->where('project_id','!=', null)->paginate(6);
      }
      else {
        $products = Product::where('project_id','!=', null)->paginate(6);
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

    // Muestra el formulario de crear producto (Cargar donación)
    public function create($id)
    {

      $productoOrigen = Product::find($id);

      // dd( $productoOrigen);
      $Category = $productoOrigen->category->name;
      $Name = $productoOrigen->name;
      $Project = $productoOrigen->Project->name;
      $categories = Category::all();


        return view('front.products.create', compact('Project', 'Category', 'Name', 'categories','productoOrigen'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(request $request)
    {
      $request->validate([

        'description' => 'required',
        'image' => 'required | image'
      ]);
        $project = Project::find($request['project']);
        // dd( $project);
        $projects = [];
        $products = Product::where('user_id', Auth::user()->id )->paginate(6);
        $categories = Category::all();
        $productImage = $request->file('image');
        $productImageName = uniqid('img-') . '.' . $productImage->extension();
        $productImage->storePubliclyAs("public/products", $productImageName);
        $userID = Auth::user()->id;
         Product::create([
              'name' => $request['product'],
              'category_id' => $request['category'],
              'image' => $productImageName,
              'description' => $request['description'],
              'user_id' => $userID ,
              'project_id' => $request['project'] ,
          ]);
          return view('front.user.profile', compact('categories', 'project', 'products', 'projects'));
      }


    //   $product = new Product; // Objeto de tipo Product vacio
    //
  	// 	// Asocio atributos con valores
  	// 	$product->name = $request->input('name');
    //   // $product->category = $request->input('category');
    //   // $product->project = $request->input('project');
    //   // $product->user_id = $request->input('user_id');
    //   // $product->description = $request->input('description');
    //
    //   $productImage = $request->file('image');
    //
    //   if ($image) {
    //   $productImageName = uniqid('img-') . '.' . $productImage->extension();
    //
    //   $productImage->storePubliclyAs("public/products", $productImageName);
    //   $product->image = $productImageName;
    //   }
    //
    //   $product->save();
    //
    //   return redirect('/front.products.index');
    // }

      // $categories = Category::orderBy('name')->get();
      //
      //
      // $userID = Auth::user()->id;

        // $product = Product::create([
        //     'name' => $request['name'],
        //     'category_id' => $request['category'],
        //     'image' => $productImageName,
        //     'user_id' => $userID ,
        //     'project_id' => $request['project'] ,
        //     'description' => $request['description'],
        //     ]);
        //     $product




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
      // Busco el producto
      $product = Product::find($id);
      $Project = $product->Project->name;
      $Name = $product->name;
      $Category = $product->category->name;


      // Busco las categorías y proyectos
      $categories = Category::all();
      $projects = Project::all();
      return view('front.products.edit', compact('product', 'categories', 'projects', 'Project', 'Name', 'Category'));



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
      $request->validate([

          'image' => 'image'
        ]);

        $product = Product::find($id);
        $products = Product::where('user_id', Auth::user()->id )->paginate(6);

          		// Asocio atributos con valores
    		$product->name = $request['product'];
        $product->category_id = $request['category'];
        $product->project_id = $request['project'];
        $product->description = $request['description'];

        $productImage = $request->file('image');

        if ($productImage) {
        $productImageName = uniqid('img-') . '.' . $productImage->extension();

        $productImage->storePubliclyAs("public/products", $productImageName);
        $product->image = $productImageName;
        }

        $product->save();

          return view('front.user.profile', compact ('products'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      // Busco el producto
      $productToDelete = Product::find($id);

      // Lo borro
      $productToDelete->delete();

      // Redirecciono a una RUTA
      return redirect('front.products.create');
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

      $products = Product::where('name','LIKE',"%$search%")->where('project_id','!=', null)->paginate(6);
      $projects = Project::where('name','LIKE',"%$search%")->paginate(6);

      $categories = Category::all();
      $allprojects = Project::all();

      // return view('front.products.index', compact('products', 'categories', 'allprojects'));
      return view('front.products.index', compact('products', 'categories', 'projects', 'allprojects'));
      // return view('front.products.index');
    }
}
