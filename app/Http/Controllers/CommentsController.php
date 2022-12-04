<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommentRequest;
use App\Mail\CommentReceived;
use App\Models\Post;
use Illuminate\Support\Facades\Mail;

class CommentsController extends Controller
{
    public function Store(StoreCommentRequest $request, $id)
    {
        $validated = $request->validated();
        $post = Post::find($id);
        $post->addComment($validated['body']);                       
        $request = request();
        Mail::to($post->user)->send(new CommentReceived($post));
        return redirect()->back();
    }
}
