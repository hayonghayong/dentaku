@extends('layouts.app')
@section('content')

<!-- 更新画面 -->
<div class="main">
<form action="{{ url('users/update') }}" method="POST">
<div class="content">
  <label for="name" class="label">名前</label>
    <div class="col-md-6">
      <input id="name" type="text" class="form-control" name="name" value="{{$user->name}}" required autofocus>
        @if ($errors->has('name'))
        <span class="help-block">
          <strong>{{ $errors->first('name') }}</strong>
        </span>
        @endif
      </div>
</div>

<div class="content">
  <label for="email" class="label">メールアドレス</label>
    <div class="col-md-6">
      <input id="email" type="email" class="form-control" name="email" value="{{$user->email}}" required>
      @if ($errors->has('email'))
        <span class="help-block">
          <strong>{{ $errors->first('email') }}</strong>
        </span>
      @endif
    </div>
</div>

<!-- Save ボタン/Back ボタン -->
<div class= "content">
<button type="submit" class="danger">保存</button>
</div>
<a class="btn btn-link pull-right" href="{{ url('/') }}"> トップページに戻る
</a> 
<input type="hidden" name="id" value="{{$user->id}}" /> 
<!--/ id 値を送信 -->
{{ csrf_field() }}
</form>
</div> 
</div>
</div>
@endsection