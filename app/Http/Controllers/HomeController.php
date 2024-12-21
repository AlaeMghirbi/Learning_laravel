<?php
namespace App\Http\Models;
namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        
        $categories=Category::all() ;
        #$posts =Post::latest()->get();
        $posts =Post::when(request('category_id'),function($querry){
        $querry->where('category_id',request('category_id'));
        })->latest()->get();
        return view('home',compact('categories','posts'));

    }
}
