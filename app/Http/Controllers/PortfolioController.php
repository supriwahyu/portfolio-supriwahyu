<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;
use Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::all();
        return view('admin.portfolio.index', compact('portfolios'));
    }
    
    public function show($id)
    {
        $portfolios = Portfolio::find($id);
        return view('admin.portfolio.show', compact('portfolios'));
    }

    public function create()
    {
        return view('admin.portfolio.create');
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(),[
                                    'title' => 'required',
                                    'header' => 'required',
                                    'body' => 'required',
                                    'footer' => 'required',
                                    'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                                    'link' => 'required',
                    ]);
                    
        if($validator->fails()){
            return back()->with('error', 'Ada Beberapa form yang terlewat');
        }

        $title = $request->title;
        $header = $request->header;
        $body = $request->body;
        $footer = $request->footer;
        $link = $request->link;
        // $tag = $request->tag;
        // $slug = $this->slugify($title);

        // $article_selected = Article::where('slug', $slug)->first();
        // if($article_selected){
        //     return back()->with('error', 'Sudah ada artikel dengan slug yang sama');
        //     die();
        // }

        $imageName = $request->image->getClientOriginalName();               
        $request->image->move(public_path('img/portfolio'), $imageName);
        
        $user = Auth::guard('admin')->user();
            $portfolio_new = new Portfolio;
            $portfolio_new->title = $title;
            $portfolio_new->header = $header;
            $portfolio_new->body = $body;
            $portfolio_new->footer = $footer;
            $portfolio_new->link = $link;
            // $article_new->tag = $tag;
            // $article_new->slug = $slug;
            // $portfolio_new->writer = $user->name;
            $portfolio_new->image_url = $imageName;
            $portfolio_new->save();
            return redirect()->route('portfolio')->with('success', 'portfolios berhasil terbuat');

        }
        

        // $user = Auth::guard('admin')->user();

        // $article_new = new Article;
        // $article_new->title = $title;
        // $article_new->header = $header;
        // $article_new->body = $body;
        // $article_new->footer = $footer;
        // // $article_new->tag = $tag;
        // // $article_new->slug = $slug;
        // $article_new->writer = $user->name;
        // $article_new->image_url = $imageName;
        // $article_new->save();
        // return redirect()->route('article')->with('success', 'Artikel berhasil terbuat');
    
    public function edit($id)
    {
        $portfolio = Portfolio::findOrFail($id);

        return view('admin.portfolio.edit', [
            'portfolio' => $portfolio
        ]);
    }
    public function update(Request $request,Portfolio $article, $id)
    {
        $portfolio = Portfolio::find($id)->update($request->all());
        
        $portfolio = Portfolio::where('id',$id)->first();
        // unlink('img/article/'.$article['image_url']);
        
        // $image = $request->file('image');
        // $imageName = $image->getClientOriginalName();
        // $image->move(public_path('images/artikel'), $imageName);

        $data = [
            'image' => $request->image,
        ];

        if($request->hasFile('image_url')){
            $image = $request->file('image_url');
            $image_name = $image->getClientOriginalName();
            $image->move('img/portfolio',$image_name);
            $data = array_merge($data, ['image' => $image_name]); // here you merge the image name on the data
        } else if ($request->hasFile('image')) {
            unlink('img/portfolio/'.$portfolio['image_url']);
            $image = $request->image;
            $image_name = $image->getClientOriginalName();
            $image->move('img/portfolio',$image_name);
            $portfolio->image_url = $image_name;
            $portfolio->save();
        }

        // $imageName = $request->image->getClientOriginalName();               
        // $request->image->move(public_path('img/article'), $imageName);
        // unlink('img/article/'.$article['image_url']);
        // $article->image = $image_name;
        // $article->save();

        return redirect()->route('portfolio')->with('success',' Data telah diperbaharui!');
    }

    public function destroy(Request $request, $id)
    {
        $portfolio_selected = Portfolio::find($id);
        $portfolio_selected->delete();
        return redirect('portfolio')->with('success', 'portfolios berhasil terhapus');
    }
}
