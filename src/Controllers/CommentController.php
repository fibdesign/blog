<?php

namespace Fibdesign\Blog\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Fibdesign\Blog\Models\Article;
use Fibdesign\Blog\Models\Comment;
use Fibdesign\Blog\Requests\CommentRequest;

class CommentController extends Controller
{
    public function index(Request $request)
    {
        $approved = ($request->has('approved') && $request->query('approved') == 1);
        $deleted = ($request->has('deleted') && $request->query('deleted') == 1);
        $unapproved = (!$approved && !$deleted);
        return Comment::query()
            ->when($approved, function ($query, $approved){
                return $query->where('approved', $approved);
            })
            ->when($deleted, function ($query, $deleted){
                return $query->where('deleted', $deleted);
            })
            ->when($unapproved, function ($query){
                return $query->where('approved', false)->where('deleted', false);
            })
            ->paginate(30);
    }

    public function store(CommentRequest $request, Article $article)
    {
        $data = $request->validated();
        return $article->comments()->create($data);
    }

    public function update(Request $request, Comment $comment)
    {
        $data['approved'] = $request->approved;
        $data['deleted'] = $request->deleted;
        return $comment->update($data);
    }

}
