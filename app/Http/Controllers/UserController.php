<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function index(){

        if(Auth::user()->name=='admin'){
        $users = User::all();
        }
        else {  
            $users=[Auth::user()];
        }
        return view('users.index', compact('users'));

    }

    public function create(){
        return view('users.create');
    }

    public function store(Request $request){
        $request->validate([
           'name' => 'required|max:50',
           'email' => 'required|unique:users',
           'password' => 'required|min:6' 
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ];

        User::create($data);

        return redirect()->route('users.index');
    }

    public function edit(Request $request, $id){
        $user = User::find($id);
        return view('users.edit', compact('user'));
    
    }

    public function update(Request $request, $id){
        $data = [
            'name' => $request->name,
            'email' => $request->email
        ];

        if ($request->filled('password')){
            $data['password'] = bcrypt($request->password);
        
        }

        $user=User::findOrFail($id);
        $user->update($data);

        // return back();

        return redirect()->route('users.index');
    }

    public function show($id){
        $user = User::find($id);
        return view('users.show', compact('user'));
    }

    public function destroy($id){
        $user = User::find($id)->delete();
        return back();
    }
}
