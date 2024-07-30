<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use Carbon\Carbon;
use App\Http\Requests\UpdatePostRequest;
use App\Http\Requests\StorePostRequest;
use Illuminate\Support\Facades\Auth;
class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('admin.posts.index',compact('posts'));
    }
    public function create()
    {
        $posts = Post::paginate(25);
        return view('admin.posts.create', compact('post'));
    }
    public function store(StorePostRequest $request)
    {
        $data = $request->validated();
        $data ['author'] = Auth:: user()->name;
        $data ['creation_date'] = Carbon::now();
        $newPost = Post::create($data);
        return redirect()->route('admin.posts.show', $newPost);
    }
    public function show(Post $post)
    {
        return view('admin.posts.show', compact('post'));
    }
    public function edit(Post $post)
    {
        return view('admin.posts.edit', compact('post'));
    }
    public function update(UpdatePostRequest $request, Post $post)
    {
        $data = $request ->validated();
        $newPost =$post->update($data);
        return redirect()->route('admin.posts.show', $post);
    }
    public function destroy(string $id)
    {
    }
}