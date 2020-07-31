<?php

namespace App\Http\Controllers;

use App\Category;
use App\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class PostController extends Controller
{
    public function index(Request $request)
    {
        if ($request->get('published')) {
            $posts = post::where('status', 'Published')->get();
        } elseif ($request->get('draft')) {
            $posts = post::where('status', 'Draft')->get();
        } else {
            $posts = post::latest()->get();
        }

        //count
        $postCount = post::latest()->count();
        $publishedCount = post::where('status', 'Published')->count();
        $draftCount = post::where('status', 'Draft')->count();

        return view(
            'post.index',
            [
                'posts' => $posts,
                'publishedCount' => $publishedCount,
                'draftCount' => $draftCount,
                'postCount' => $postCount
            ]
        );
    }

    public function create()
    {
        $categories = Category::orderBy('created_at')->get();
        return view('post.create', ['categories' => $categories]);
    }

    public function store(Request $request)
    {
        try {
            $this->validate($request, [
                'title' => 'required|max:60|min:5',
                'id_category' => 'required',
                'content' => 'required',
                'image' => 'required|mimes:jpeg,jpg,png',
            ]);


            $image = $request->image;
            $new_image = time() . $image->getClientOriginalName();
            $image->move('images/uploads/posts/', $new_image);

            if ($request->get('draft')) {
                $status = 'Draft';
            } else {
                $status = 'Published';
            }
            $posts = [
                'title' => $request->title,
                'slug' => Str::slug($request->title),
                'id_category' => $request->id_category,
                'content' => $request->content,
                'image' => 'images/uploads/posts/' . $new_image,
                'id_user' => Auth::id(),
                'status' => $status
            ];

            post::create($posts);
            \Session::flash('success', 'Data berhasil di tambah');
            return redirect()->route('post.index');
        } catch (Throwable $th) {
            report($th);
            return false;
        }
    }

    public function edit($id)
    {
        $posts = post::findOrFail($id);
        $categories = Category::orderBy('created_at')->get();

        return view('post.edit', ['posts' => $posts, 'categories' => $categories]);
    }

    public function update(Request $request, $id)
    {
        try {
            $this->validate($request, [
                'title' => 'required|max:60|min:5',
                'id_category' => 'required',
                'content' => 'required',
                'image' => 'mimes:jpeg,jpg,png',
            ]);

            if ($request->get('draft')) {
                $status = 'Draft';
            } else {
                $status = 'Published';
            }


            if ($request->has('image')) {

                $image = $request->image;
                $new_image = time() . $image->getClientOriginalName();
                $image->move('images/uploads/posts/', $new_image);
                $posts = [
                    'title' => $request->title,
                    'slug' => Str::slug($request->title),
                    'id_category' => $request->id_category,
                    'content' => $request->content,
                    'image' => 'images/uploads/posts/' . $new_image,
                    'id_user' => Auth::id(),
                    'status' => $status
                ];
            } else {
                $posts = [
                    'title' => $request->title,
                    'slug' => Str::slug($request->title),
                    'id_category' => $request->id_category,
                    'content' => $request->content,
                    'id_user' => Auth::id(),
                    'status' => $status
                ];
            }

            post::findOrFail($id)->update($posts);
            \Session::flash('success', 'Data berhasil di update');
            return redirect()->route('post.index');
        } catch (Throwable $th) {
            report($th);
            return false;
        }
    }

    public function destroy($id)
    {
        try {
            post::findOrFail($id)->delete();
            \Session::flash('success', 'Data berhasil di hapus');
            return redirect()->route('post.index');
        } catch (Throwable $th) {
            report($th);
            return false;
        }
    }

    public function trashed()
    {
        try {
            $posts = post::onlyTrashed()->get();
            return view('post.trashed', ['posts' => $posts]);
        } catch (Throwable $th) {
            report($th);
            return false;
        }
    }

    public function restore($id)
    {
        try {
            post::withTrashed()->where('id', $id)->restore();
            \Session::flash('success', 'Data berhasil di restore');
            return redirect()->route('post.trashed');
        } catch (Throwable $th) {
            report($th);
            return false;
        }
    }

    public function kill($id)
    {
        try {
            $imagePath = post::withTrashed()->select('image')->where('id', $id)->first();
            $file_path = $imagePath->image;
            if (file_exists($file_path)) {
                unlink($file_path);
            }
            post::withTrashed()->where('id', $id)->forceDelete();
            \Session::flash('success', 'Data berhasil di hapus permanen');
            return redirect()->route('post.trashed');
        } catch (\Throwable $th) {
            report($th);
            return false;
        }
    }
}
