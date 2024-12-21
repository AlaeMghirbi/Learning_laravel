<?php


namespace App\Http\Models;
namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PostController extends Controller
{
    public function show(Post $post)
    {

        return view('post', compact('post'));
    }
}
