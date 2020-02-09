@extends('layouts.app')
<!-- 更新画面 -->
<form action="{{ url('goods/update') }}" method="POST">
<div>
<label for="name">物品名</label>
<input type="text" name="name" class="form-control" value="{{$good->name}}">
</div>
<div>
<label for="weight">重さ</label>
<input type="text" name="weight" class="form-control" value="{{$good->weight}}">
</div>

<!-- Save ボタン/Back ボタン -->
<div>
<button type="submit" class="btn btn-primary">保存</button>
<a class="btn btn-link pull-right" href="{{ url('/') }}"> トップページに戻る
</a> 
</div>
<!-- id 値を送信 -->
<input type="hidden" name="id" value="{{$good->id}}" /> 
<!--/ id 値を送信 -->
<!-- CSRF -->
{{ csrf_field() }}
<!--/ CSRF -->
</form>
</div> 
</div>
