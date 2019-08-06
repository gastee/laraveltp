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

      $products = Product::where('project_id',$id)->where('user_id', '=', Auth::user()->id)->paginate(6);

      $project = Project::find($id);

      $categories = Category::all();

      $offeredproducts = Product::where('project_id',$id)->where('user_id', '!=', Auth::user()->id)->paginate(6);

        return view('front.projects.show', compact('products', 'categories', 'project', 'offeredproducts'));

        // return view('front.products.index');
      }

      public function search(Request $request)
      {
        $search = $request -> input('search');

        // $products = Product::where('name','LIKE',"%$search%")->where('project_id','!=', null)->paginate(6);
        $projects = Project::where('name','LIKE',"%$search%")->paginate(6);

        $categories = Category::all();
        $allprojects = Project::all();

        // return view('front.products.index', compact('products', 'categories', 'allprojects'));
        return view('front.projects.index', compact('categories', 'projects', 'allprojects'));

      }


}
