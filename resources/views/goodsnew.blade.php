@extends('layouts.app')
@section('content')

<!-- 更新画面 -->
<form action="{{ url('goods') }}" method="POST" class="form- horizontal">
{{ csrf_field() }}
<div>
<label for="name">物品名</label>
<input type="text" name="name" class="form-control">
</div>
<div>
<label for="weight">体重</label>
<input type="text" name="weight" class="form-control">
</div>

<!-- Save ボタン/Back ボタン -->
<div>
<button type="submit" class="btn btn-danger"> Save</button>
</div>
</form>
<a class="btn btn-link pull-right" href="{{ url('/') }}"> トップ画面に戻る
</a> 
</div> 
</div>
@endsection