@extends('layouts.app')
@section('content')
<!-- 更新画面 -->
<div class="main">
<form action="{{ url('goods/update') }}" method="POST">
<div class="content">
<label for="name" class="label">物品名</label>
<input type="text" name="name" class="form-control" value="{{$good->name}}">
</div>
<div class="content">
<label for="weight" class="label">重さ</label>
<input type="text" name="weight" class="form-control" value="{{$good->weight}}">
</div>

<!-- Save ボタン/Back ボタン -->
<div class="content">
<button type="submit" class="danger">保存</button>
</div>
<a class="btn btn-link pull-right" href="{{ url('/') }}"> トップページに戻る
</a> 
<!-- id 値を送信 -->
<input type="hidden" name="id" value="{{$good->id}}" /> 
<!--/ id 値を送信 -->
<!-- CSRF -->
{{ csrf_field() }}
<!--/ CSRF -->
</form>
</div> 
</div>
</div>
@endsection
