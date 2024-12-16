<?php

namespace App\Http\Controllers\Back;

use App\Models\article;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\UpdateArticleRequest;

class articleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {
            $article = article::with('Category')->latest()->get();

            return DataTables::of($article)
            //costum kolom
            ->addIndexColumn() // untuk id
            ->addColumn('category_id', function($article){
                return $article->category->name;
            })
            
            ->addColumn('status', function($article){
                if ($article->status== 0) {
                    return '<span class="badge bg-danger">Private</span>';
                } else {
                   return '<span class="badge bg-success">Published</span>';
                }
                })

            ->addColumn('button', function($article){
                return '<div class="text-center">
                        <a href="article/'.$article->id.'" class="btn btn-secondary">Detail</a>
                        <a href="article/'.$article->id.'/edit" class="btn btn-warning">Edit</a>
                        <a href="#" onclick="deleteArticle(this)" data-id="'.$article->id.'" class="btn btn-danger">Delete</a>
                </div>';
                    })
                

            ->rawColumns(['category_id', 'status', 'button'])
            ->make();
        }
        return view('back.article.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('back.article.create',[
            'categories' => Category::get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticleRequest $request)
    {
        $data = $request->validated();

        $file = $request->file('img');
        $fileName = uniqid().'.'.$file->getClientOriginalExtension();
        $file->storeAs('back/', $fileName);

        $data['user_id'] = auth()->user()->id;
        $data['img'] = $fileName;
        $data['slug'] = Str::slug($data['title']);

        Article::create($data);

        return redirect(url('article'))->with('success', 'Data article has been created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('back.article.show',[
            'article' => Article::with(['User', 'Category'])->find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('back.article.update',[
            'article' => Article::find($id),
            'categories' => Category::get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArticleRequest $request, string $id)
    {
        $data = $request->validated();

        if ($request->hasFile('img')) {
            $file = $request->file('img'); //img
        $fileName = uniqid().'.'.$file->getClientOriginalExtension(); //file img (jpg/jpeg)
        $file->storeAs('back/', $fileName); //tempat simpan img

        //unlink img/delete img old
        Storage::delete('back/' .$request->oldImg);

        $data['img'] = $fileName;
        } else {
        $data['img'] = $request->oldImg;
        }
        $data['user_id'] = auth()->user()->id;
        $data['slug'] = Str::slug($data['title']);

        Article::find($id)->update($data);

        return redirect(url('article'))->with('success', 'Data article has been Updated');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Article::find($id);
        Storage::delete('back/' . $data->img);
        $data->delete();

        return response()->json([
            'message' => 'Data Article has been Deleted'
        ]);
    }
}
