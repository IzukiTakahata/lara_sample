<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;

class MyPageController extends Controller
{
    //
    public function index(){
        $user = Auth::user();

        // 自分の投稿を取得
        $posts = Post::where('user_id', '=', Auth::id())->get();

        // 自分の投稿を取得
        $has_many_posts = $user->posts;

        // mypage
        return view('mypage')->with([
            'user' => $user,
            'posts' => $posts,
            'has_many_posts' => $has_many_posts,
        ]);
    }
}
