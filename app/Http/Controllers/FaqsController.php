<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq;

class FaqsController extends Controller
{
    //
    public function index(){
        $faqs = Faq::all();
        return view('faqs.index',compact('faqs'));
    }
    public function create() {
        return view ('faqs.create');
    }

    public function store(Request $request){

        Faq::create($request->all());
        return redirect()->route('faqs.index');

    }

    public function edit($id){
        $faq=Faq::findOrFail($id);
        return view('faqs.edit', compact('faq'));
    }

    public function update(Request $request, $id){
        $faq=Faq::findOrFail($id);
        $faq->update($request->all());
        return redirect()->route('faqs.index');
    }

    public function show($id){
        $faq=Faq::findOrFail($id);
        return view('faqs.show', compact('faq'));
    }

    public function destroy($id){
        $faq=Faq::findOrFail($id)->delete();
        return back();
    }
}
