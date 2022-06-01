<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Menu;
use Illuminate\Support\Facades\Session;

class PostsController extends Controller
{
    public function allPost()
    {
        $title = 'Главная страница';
        $menus = Menu::get();
        $posts = Post::where('published' , 1)
            ->orderByDesc('created_at')
            ->get();


        return view('posts.index',
            [
                'menus' => $menus,
                'posts' => $posts,
                'title' => $title
                ]);
    }

    public function showPost($id)
    {
        $menus = Menu::get();
        $post = Post::find($id);
        $title = 'Просмотр статьи';


        return view('posts.showPost',
            [
                'menus' => $menus,
                'post' => $post,
                'title' => $title
            ]);
    }

    public function createPost()
    {

        $menus = Menu::get();
        $title = 'создание новой статьи';
        $pattern = '/^[a-z0-9-_.-]+$/i';

        if (isset($_POST['newPost'])) {
            $characterСode = Post::where('characterСode', $_POST['characterСode'])
                ->first();
            if (isset($characterСode)) {
                Session::flash('flash_message', 'такой код статьи уже есть');
            } elseif(!preg_match($pattern, $_POST['characterСode'])) {
                Session::flash('flash_message', 'введены недопустимые символы');
                } else {
                $newPost = new Post();
                $newPost->characterСode = $_POST['characterСode'];
                $newPost->title = $_POST['title'];
                $newPost->topic = $_POST['topic'];
                $newPost->body = $_POST['text'];
                $newPost->published = '0';
                $newPost->save();
                Session::flash('flash_message', 'новая статья создана');
                $_POST['newPost'] = null;
                return redirect('/');
                }
            }

        return view('posts.createPost',
            [
                'menus' => $menus,
                'title' => $title
            ]);
    }
}
