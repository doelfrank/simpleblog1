<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        return view('blog', [
            "title_page" => "Blog",
            "posti" => Post::all()  // variabel posti akan di isi variabel yg dari model Post
        ]);
    }

    public function cari(Post $post){
        return view('posting', [
            "title_page" => "Single Postingan",
            "posti" => $post  // variael $post dari model Post akan diterima, kemudian di kirim ke halaman Posting
        ]);
    }
}
