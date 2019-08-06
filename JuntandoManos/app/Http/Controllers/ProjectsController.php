<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Project;
use App\Organization;
use Auth;


class ProjectsController extends Controller{

    public function index(){


        $categories = Category::all();
        $projects = Project::paginate(6);
        $organizations = Organization::all();




        return view('front.projects.index', compact('projects', 'categories', 'organizations'));
        // return view('front.products.index');
      }
    public function show($id){

      $userOrg = Auth::user()->organization_id;
      // dd( $userOrg);

      if ($userOrg != null) {
        // code...
        $offeredproducts = Product::where('project_id',$id)->where('user_id', '!=', Auth::user()->id)->paginate(6);
        $products = Product::where('project_id',$id)->where('user_id', '=', Auth::user()->id)->paginate(6);
        // dd( $offeredproducts);
      }
      else {

      $offeredproducts = [];
      $products = Product::where('project_id',$id)->where('user_id', '!=', Auth::user()->id)->paginate(6);
      // dd( $products);

      }
      $project = Project::find($id);
      $categories = Category::all();

        return view('front.projects.show', compact('products', 'categories', 'project', 'offeredproducts'));

        // return view('front.products.index');
      }

      public function search(Request $request)
      {
        $search = $request -> input('search');

        $projects = Project::where('name','LIKE',"%$search%")->paginate(6);

        $categories = Category::all();
        $allprojects = Project::all();

        return view('front.projects.index', compact('categories', 'projects', 'allprojects'));

      }


}
