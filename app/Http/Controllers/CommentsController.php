<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommentRequest;
use App\Models\Post;

class CommentsController extends Controller
{
    public function Store(StoreCommentRequest $request, $id)
    {
        $validated = $request->validated();
        $post = Post::find($id);
        $post->addComment($validated['body']);                       
        $request = request();
        return redirect()->back();
    }
}
