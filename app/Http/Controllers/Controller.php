<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\post;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}

class PostController extends Controller
{
    public function index()
    {
        $posts = post::all();
        DB::statement('USE userDB');
        return view('posts', compact('posts'));
    }
//    public function show(post $post)
//    {
//        return view('post.blade.php', compact('post'));
//    }
}
