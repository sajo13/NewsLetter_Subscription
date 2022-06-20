<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function show()
    {
        return view('post');
    }

    public function adminPost(Request $request)
    {
        $storeData = $request->validate([
            'subject' => 'required|max:100',
            'message' => 'required|max:255'
        ]);        
        $post = Post::create($storeData);
        return redirect('/send-bulk-mail');  
    }
}
