<?php

namespace Fibdesign\Blog\Controllers;
use App\Http\Controllers\Controller;
use Fibdesign\Blog\Models\Article;
use Fibdesign\Blog\Requests\ArticleRequest;
use Fibdesign\Blog\Resources\ArticleShowResource;
use Fibdesign\Blog\Resources\ArticlesResource;


class ArticleController extends Controller
{
    public function index() {
        return Article::query()
            ->withCount('comments as commentsCount')
            ->paginate(30);
    }
    public function indexClient() {
        return ArticlesResource::collection(
            Article::query()->paginate(config('blog.perPage'))
        );
    }
    public function popular() {
        return Article::query()
            ->popular()
            ->limit(config('blog.popularLimit'))
            ->get();
    }

    public function store(ArticleRequest $request)
    {
        $data = $request->validated();
        $data['thumbnail'] = config('app.url').$request->file('thumbnail')->store('/assets/Blog/thumbnails');
        $data['tags'] = ($request->has('tags')) ? json_decode($request['tags']) : null;

        return Article::create($data);
    }
    public function show(Article $article)
    {
        return new ArticleShowResource(
            $article->load('approvedComments')
                ->makeVisible(['description','tags'])
                ->append('isPopularFull')
        );
    }
    public function update(ArticleRequest $request, Article $article)
    {
        $data = $request->validated();
        if($request->has('thumbnail')){
            $data['thumbnail'] = config('app.url').$request->file('thumbnail')->store('/assets/Blog/thumbnails');
        }
        $data['tags'] = ($request->has('tags')) ? json_decode($request['tags']) : null;

        return $article->update($data);
    }
    public function destroy(Article $article) { return $article->delete(); }
}
