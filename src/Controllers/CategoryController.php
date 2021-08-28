<?php

namespace Fibdesign\Blog\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Fibdesign\Blog\Models\Category;

class CategoryController extends Controller
{
    public function index() { return Category::all(); }
    public function store(Request $request)
    {
        $data = $request->validate(['label' => 'required | max:50']);
        return Category::create($data);
    }
    public function update(Request $request, Category $category)
    {
        $data = $request->validate(['label' => 'required | max:50']);
        return $category->update($data);
    }
    public function destroy(Category $category) { return $category->delete(); }
}
