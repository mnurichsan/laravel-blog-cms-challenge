<?php

namespace App\Http\Controllers;

use App\Category;
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
        } catch (Throwable $th) {
            report($th);
            return false;
        }
    }

    public function edit($id)
    {
        try {
            $category = Category::findOrFail($id);
            return view('category.edit', ['category' => $category]);
        } catch (Throwable $th) {
            report($th);
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
        } catch (Throwable $th) {
            report($th);
            return false;
        }
    }

    public function destroy($id)
    {
        try {
            Category::findOrFail($id)->delete();
            \Session::flash('success', 'Data tersimpan di trashed');
            return redirect()->route('category.index');
        } catch (Throwable $th) {
            report($th);
            return false;
        }
    }

    public function trashed()
    {

        $categories = Category::onlyTrashed()->get();
        return view('category.trashed', ['categories' => $categories]);
    }

    public function restore($id)
    {
        try {
            Category::withTrashed()->where('id', $id)->first()->restore();
            \Session::flash('success', 'Data berhasil di restore');
            return redirect()->route('category.trashed');
        } catch (Throwable $th) {
            report($th);
            return false;
        }
    }

    public function kill($id)
    {
        try {
            Category::withTrashed()->where('id', $id)->first()->forceDelete();
            \Session::flash('success', 'Data berhasil di hapus permanen');
            return redirect()->route('category.trashed');
        } catch (Throwable $th) {
            report($th);
            return false;
        }
    }
}
