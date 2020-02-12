@extends('layouts.app')
@section('content')
<!-- 更新画面 -->
<div class="main">
<form action="{{ url('goods') }}" method="POST" class="form- horizontal">
{{ csrf_field() }}
<div class= "content">
<label for="name" class="label">物品名</label>
<input type="text" name="name" class="form-control">
</div>
<div class= "content">
<label for="weight"class="label">重さ</label>
<input type="text" name="weight" class="form-control">
</div>

<!-- Save ボタン/Back ボタン -->
<div class= "content">
<button type="submit" class="danger"> 保存</button>
</div>
</form>
<a class="btn btn-link pull-right" href="{{ url('/') }}"> トップ画面に戻る
</a> 
</div> 
</div>
</div>
@endsection