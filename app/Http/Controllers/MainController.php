<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Models\Contact;


class MainController extends Controller
{
    public function index ()
    {
        $spacialPosts = Post::where('is_spacial',1)->limit(6)->latest()->get();
        $latestPosts = Post::limit(6)->latest()->get();
        // $popularPosts = Post::limit(4)->orderBy('view','DESC')->get();
        return view('index',compact('spacialPosts','latestPosts'));
    }

    public function categoryPosts ($slug)
    {
        $category = Category::where('slug',$slug)->first();
        // $popularPosts = Post::limit(4)->orderBy('view','DESC')->get();
        return view('categoryPosts',compact('category'));
    }

    public function postDetail ($slug)
    {
        $post  = Post::where('slug',$slug)->first();
        // $popularPosts = Post::limit(4)->orderBy('view','DESC')->get();
        $post->increment('view');
        $post->save();
        $otherPosts = Post::where('category_id',$post->category_id)->where('id', '!=', $post->id)->limit(3)->get();
        return view('postDetail',compact('post','otherPosts'));

    }

    public function contact ()
    {
        return view('contact');
    }

    public function mesages_users(ContactRequest $request)
    {
        $post = $request->validated();
        Contact::create($post);
        return back()->with('success',"Ma'lumot muvofaqqiyatli yuborildi");
    }

    public function search(Request $request)
    {
        $key = $request->key;

        // $popularPosts = Post::limit(4)->orderBy('view','DESC')->get();
        $posts = Post::where('title_uz','like','%'.$key.'%')
                ->orWhere('title_ru','like','%'.$key.'%')
                ->orWhere('body_uz','like','%'.$key.'%')
                ->orWhere('body_ru','like','%'.$key.'%')->get() ;

        return view('search',compact('key','posts'));

    } 
}
