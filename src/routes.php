<?php

use Fibdesign\Blog\Controllers\ArticleController;
use Fibdesign\Blog\Controllers\CategoryController;
use Fibdesign\Blog\Controllers\CommentController;
use Fibdesign\Blog\Models\Category;
use Illuminate\Support\Facades\Route;

Route::prefix('apiClient')->middleware('api')->group(function (){
    Route::get('/articles' , [ArticleController::class, 'indexClient']);
    Route::get('/articles/popular' , [ArticleController::class, 'popular']);
    Route::post('/articles/{article}/comments ', [CommentController::class, 'store']);
    Route::get('/articles/{article}/{slug?}' , [ArticleController::class, 'show'])->where('article', '[0-9]+');
    Route::get('/categories', function (){ return Category::all(); });
});
Route::prefix('apiAdmin')->middleware(['api','auth:sanctum'])->group(function (){
    Route::get('/articles/popular' , [ArticleController::class, 'popular']);
    Route::apiResource('articles', ArticleController::class);
    Route::apiResource('/comments', CommentController::class)->only(['index','update']);
    Route::apiResource('/categories', CategoryController::class)->except('show');
});
