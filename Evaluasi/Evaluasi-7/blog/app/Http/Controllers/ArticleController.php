<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\support\Str;
use Illuminate\Http\Request;


class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::orderBy('created_at', 'desc')->paginate(6);
        return view('article.index', compact('articles'));
    }

    public function pembaca()
    {
        $articless = Article::orderBy('created_at', 'desc')->paginate(6);
        $articlesss = Article::orderBy('created_at', 'desc')->paginate(3);
        return view('pembaca.index', compact('articless', 'articlesss'));
    }
    
    public function show($id)
    {
        $article = Article::find($id);
        
        if($article == NULL){

            abort(404);
        }

        return view('article.single', compact('article'));
    }

    public function page($id){
        $article =Article::find($id);
        if($article == NULL){
            abort(404);
        }   

        return view('pembaca.page', compact('article'));
    }

    public function  create()
    {
        return view('article.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul'     => 'required||max:50|min:10',
            'penulis'   => 'required',
            'kategori'  => 'required',
            'subject'   => 'required',
        ]);


        $article = new Article;
        $article->judul = $request->judul;
        $article->slug = Str::slug($request->judul, '-');
        $article->penulis = $request->penulis;
        $article->kategori = $request->kategori;
        $article->subject = $request->subject;
        $article->save();
        
        return redirect('/article')->with('status', 'Article Berhasil Ditambah!');

    }

    public function edit($id)
    {
        
        $article = Article::find($id);
        return view('article.edit', compact('article'));

    }

    public function update(Request $request, $id)
    {
        Article::find($id)->update([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul, '-'),
            'penulis' => $request->penulis,
            'kategori' => $request->kategori,
            'subject' => $request->subject
        ]);

        return redirect('/article')->with('status', 'Article Berhasil Diubah');
    }

    public function destroy($id)
    {
        Article::find($id)->delete();
        return redirect('/article')->with('status', 'Article Berhasil Dihapus');
    }
    
    public function search(Request $request)
    {
        $search = $request->get('search');
        $hasil = Article::where('judul', 'LIKE', '%' . $search . '%')->paginate(10);

        return view('pembaca.pencarian', compact('hasil', 'search'));
    }

}
