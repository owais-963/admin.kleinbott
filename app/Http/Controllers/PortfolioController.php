<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;

class PortfolioController extends Controller
{
    //

    public function index(){
        $portfolios = Portfolio::all();
        return view('portfolio.index', compact('portfolios'));
    }

    public function create(){
        return view('portfolio.create');
    }

    public function store(Request $request){
        // $request->validate([
        //     'title' => 'required',
        //     'slug' => 'required',
        //     'heading' => 'required',
        //     'content' => 'required',
        //     'image' => 'required'
        //     ]);

        // if($request->hasFile){
        //     $file = $request->file('image')->getClientOriginalName();
            
        // }

        Portfolio::create($request->all());

        return redirect()->route('portfolio.index');
    }

    public function edit($id){
        $portfolio = Portfolio::findOrFail($id);
        return view('portfolio.edit', compact('portfolio'));
    }

    public function update(Request $request, $id){
        $portfolio = Portfolio::findOrFail($id);
        $portfolio->update($request->all());
        return redirect()->route('portfolio.index');
    }

    public function destroy($id){
        $portfolio = Portfolio::findOrFail($id);
        $portfolio->delete();
        return back();
    }
}

