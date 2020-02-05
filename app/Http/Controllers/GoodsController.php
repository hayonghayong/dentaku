<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Good;
use Validator;
use Auth;

class GoodsController extends Controller
{
// ログインせな見られへん
public function __construct()
{
$this->middleware('auth'); }

//表示
public function index() {
    // $goods = Good::orderBy('created_at', 'asc')->get();
$goods = Good::where('user_id',Auth::user()->id) ->orderBy('created_at', 'desc')->get();
// $auths=Auth::user();
 return view('goods', [
'goods' => $goods ]);
}

//更新
public function update(Request $request) {
$validator = Validator::make($request->all(), [ 
    'id' => 'required',
    'name' => 'required|max:10',
    'weight' => 'required|min:1',
    ]);
if ($validator->fails()) { return redirect('/')
->withInput() ->withErrors($validator);
}
$goods = Good::where('user_id',Auth::user()->id)->find($request->id);
$goods->name = $request->name; 
$goods->weight = $request->weight; 
$goods->save();  
return redirect('/');}

//登録
public function store(Request $request) {
$validator = Validator::make($request->all(), [ 
    'name' => 'required|max:10',
    'weight' => 'required|min:1',
]);
if ($validator->fails()) { return redirect('/')
->withInput() ->withErrors($validator);
}
$goods = new Good;
$goods->user_id = Auth::user()->id;
$goods->name = $request->name; 
$goods->weight = $request->weight; 
$goods->save();  
return redirect('/');
}

//削除
public function destroy(Good $good) {
$good->delete();
return redirect('/'); }

//更新画面
public function edit($good_id) {
$goods = Good::where('user_id',Auth::user()->id)->find($good_id);
return view('goodsedit', [ 'good' => $goods
]); }

}




