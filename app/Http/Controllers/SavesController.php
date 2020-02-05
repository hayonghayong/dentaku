<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Save;
use Validator;
use Auth;

class SavesController extends Controller
{
// ログインせな見られへん
public function __construct()
{
$this->middleware('auth'); }

//登録
public function store(Request $request) {

  dd($request->save_weight);
// $validator = Validator::make($request->all(), [ 
//     'save_weight' => 'required|min:1',
// ]);
// if ($validator->fails()) { return redirect('/')
// ->withInput() ->withErrors($validator);
// }
$saves = new Save;
$saves->user_id = Auth::user()->id;
$saves->save_weight = $request->save_weight; 

$saves->save();  
return redirect('/');
}







//表示
// public function index() {
// $saves = Save::where('user_id',Auth::user()->id) ->orderBy('created_at', 'desc')->get();
//  return view('saves', [
// 'saves' => $saves ]);
// }
}
