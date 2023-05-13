<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portfolio;
use App\Models\History;
use Carbon\Carbon;

class PortfolioController extends Controller
{
    // admin/portfolio/createを呼び出す
    public function add()
    {
        return view('admin.portfolio.create');
    }
    
    public function create(Request $request)
    {
        // Validationを行う
        $this->validate($request, Portfolio::$rules);

        $portfolio = new Portfolio;
        $form = $request->all();

        // フォームから画像が送信されてきたら、保存して、$news->image_path に画像のパスを保存する
        if (isset($form['image'])) {
            $path = $request->file('image')->store('public/image');
            $portfolio->image_path = basename($path);
        } else {
            $portfolio->image_path = null;
        }

        // フォームから送信されてきた_tokenを削除する
        unset($form['_token']);
        // フォームから送信されてきたimageを削除する
        unset($form['image']);

        // データベースに保存する
        $portfolio->fill($form);
        $portfolio->save();

        return redirect('admin/portfolio/create');
    }
    
     public function index(Request $request)
    {
        $dish_name = $request->dish_name;
        if ($dish_name != '') {
            // 検索されたら検索結果を取得する
            $posts = Portfolio::where('dish_name', $cdish_name)->get();
        } else {
            // それ以外はすべてのニュースを取得する
            $posts = Portfolio::all();
        }
        return view('admin.portfolio.index', ['posts' => $posts, 'dish_name' => $dish_name]);
    }
    
    public function edit(Request $request)
    {
        // News Modelからデータを取得する
        $portfilo = Portfolio::find($request->id);
        if (empty($portfilo)) {
            abort(404);
        }
        return view('admin.portfolio.edit', ['portfolio_form' => $portfilo]);
    }

    public function update(Request $request)
    {
        // Validationをかける
        $this->validate($request, Portfolio::$rules);
        // News Modelからデータを取得する
        $portfolio = Portfolio::find($request->id);
        // 送信されてきたフォームデータを格納する
        $portfolio_form = $request->all();
        
        if ($request->remove == 'true') {
            $_form['image_path'] = null;
        } elseif ($request->file('image')) {
            $path = $request->file('image')->store('public/image');
            $portfolio_form['image_path'] = basename($path);
        } else {
            $portfolio_form['image_path'] = $portfolio->image_path;
        }

        unset($portfolio_form['image']);
        unset($portfolio_form['remove']);
        unset($portfolio_form['_token']);

        // 該当するデータを上書きして保存する
        $portfolio->fill($portfolio_form)->save();
        
        $history = new History();
        $history->portfolio_id = $portfolio->id;
        $history->edited_at = Carbon::now();
        $history->save();

        return redirect('admin/portfolio');
    }
    
    public function delete(Request $request)
    {
        // 該当するNews Modelを取得
        $portfolio = Portfolio::find($request->id);

        // 削除する
        $portfolio->delete();

        return redirect('admin/portfolio/');
    }
}
