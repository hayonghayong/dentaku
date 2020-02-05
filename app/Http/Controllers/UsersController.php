<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\User;
use Validator;
use Auth;

class UsersController extends Controller
{
    // ログインせな見られへん
public function __construct()
{
$this->middleware('auth'); }

//会員情報、更新画面表示
public function edit($user_id) {
$users = User::where('id',Auth::user()->id)->find($user_id);
return view('usersedit', [ 'user' => $users
]); }

//会員情報更新
public function update(Request $request) {
$validator = Validator::make($request->all(), [ 
    'id' => 'required',
    'name' => 'required|max:10',
    'email' => 'email',
    ]);
if ($validator->fails()) { return redirect('/')
->withInput() ->withErrors($validator);
}
$users = User::where('id',Auth::user()->id)->find($request->id);
$users->name = $request->name; 
$users->email = $request->email; 
$users->password = bcrypt($request->password);
$users->save();  
return redirect('/');}

}
