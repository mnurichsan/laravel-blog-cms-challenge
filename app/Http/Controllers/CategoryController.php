<?php

namespace App\Http\Controllers;

use App\Category;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('created_at')->get();
        return view('category.index', ['categories' => $categories]);
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        try {
            $this->validate($request, [
                'name' => 'required|min:3|max:20'
            ]);

            $category = [
                'name' => $request->name,
                'slug' => Str::slug($request->name)
            ];

            Category::create($category);
            \Session::flash('success', 'Data berhasil di tambah');
            return redirect()->route('category.index');
        } catch (Throwable $e) {
            report($e);
            return false;
        }
    }

    public function edit($id)
    {
        try {
            $category = Category::findOrFail($id);
            return view('category.edit', ['category' => $category]);
        } catch (Throwable $e) {
            report($e);
            return false;
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $this->validate($request, [
                'name' => 'required|min:3|max:20'
            ]);

            $category = [
                'name' => $request->name,
                'slug' => Str::slug($request->name)
            ];

            Category::findOrFail($id)->update($category);
            \Session::flash('success', 'Data berhasil di update');
            return redirect()->route('category.index');
        } catch (Throwable $e) {
            report($e);
            return false;
        }
    }

    public function destroy($id)
    {
        try {
            Category::findOrFail($id)->delete();
            \Session::flash('success', 'Data berhasil dihapus dan tersimpan di trashed');
            return redirect()->route('category.index');
        } catch (Throwable $e) {
            report($e);
            return false;
        }
    }
}
