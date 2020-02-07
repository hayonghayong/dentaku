@extends('layouts.app')
@section('content')

<!-- 更新画面 -->
<form action="{{ url('users/update') }}" method="POST">
<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
  <label for="name" class="col-md-4 control-label">なあえ</label>
    <div class="col-md-6">
      <input id="name" type="text" class="form-control" name="name" value="{{$user->name}}" required autofocus>
        @if ($errors->has('name'))
        <span class="help-block">
          <strong>{{ $errors->first('name') }}</strong>
        </span>
        @endif
      </div>
</div>

<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
  <label for="email" class="col-md-4 control-label">メールアドレス</label>
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
<div>
<button type="submit" class="btn btn-primary">保存</button>
<a class="btn btn-link pull-right" href="{{ url('/') }}"> トップページに戻る
</a> 
</div>
<input type="hidden" name="id" value="{{$user->id}}" /> 
<!--/ id 値を送信 -->
<!-- CSRF -->
{{ csrf_field() }}

</form>
</div> 
</div>
@endsection