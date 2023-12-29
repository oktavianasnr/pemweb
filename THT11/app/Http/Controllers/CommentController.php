<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::all();
        return view('komentar', ['comments' => $comments]);
    }

    public function create()
    {
        return view('komentar.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'comment' => 'required',
        ]);

        Comment::create([
            'comment' => $request->input('comment'),
        ]);

        return redirect()->route('comments.index');
    }

    public function edit(Comment $comment)
    {
        return view('komentar.edit', ['comment' => $comment]);
    }

    public function update(Request $request, Comment $comment)
    {
        $request->validate([
            'comment' => 'required',
        ]);

        $comment->update([
            'comment' => $request->input('comment'),
        ]);

        return redirect()->route('comments.index');
    }

    public function destroy(Comment $comment)
    {
        $comment->delete();
        return redirect()->route('comments.index');
    }
    
}
