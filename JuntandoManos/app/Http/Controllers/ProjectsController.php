<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Project;
use App\Organization;


class ProjectsController extends Controller{

    public function index($project = null){

        if ($project) {

        $products = Product::where('project_id', $project)->paginate(6);
        }
        else {
          $products = [];
        }

        $categories = Category::all();

        return view('front.projects.index', compact('products', 'project', 'categories'));
        // return view('front.products.index');
      }
    public function show($id){

      $products = Product::where('project_id',$id)->paginate(6);

        return view('front.projects.index', compact('products'));

        // return view('front.products.index');
      }




}
