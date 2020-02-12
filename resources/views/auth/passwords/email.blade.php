<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>便利電卓</title>
    <!-- jquery -->
<script src="../../js/jquery-2.1.3.min.js"></script>
<script src="../../js/main.js"></script>
<!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- 自分のCSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <!-- googlefont -->
    <link href="https://fonts.googleapis.com/earlyaccess/roundedmplus1c.css" rel="stylesheet" />
</head>
<div class="main">
    <div class="title">パスワードリセット</div>
        <div class="panel-body">
        @if (session('status'))
            <div class="alert alert-success">
         {{ session('status') }}
            </div>
        @endif
        <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
        {{ csrf_field() }}
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email" class="label">メールアドレス</label>
                <div class="col-md-6">
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
        </div>
        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="danger">
                リンクを送信
                </button>
            </div>
            <a href="{{ route('login') }}">トップページに戻る</a>
        </div>
    </form>
</div>
            