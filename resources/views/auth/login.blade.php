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
<body>
<div class="main">
    <div class="title">ログイン画面</div>
    <div class="content">
        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <label for="email" class="label">メールアドレス</label>
        <div class="col-md-6">
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}
                    </strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <label for="password" class="label">パスワード</label>
        <div class="col-md-6">
            <input id="password" type="password" class="form-control" name="password" required>
            @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}
                </strong>
            </span>
            @endif
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> パスワードを記憶
                </label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="content">
            <button type="submit" class="danger">
                                    ログイン
            </button>
        </div>
            <!-- <a class="btn btn-link" href="{{ route('password.request') }}">
            パスワードを忘れた方はこちら</a><br> -->
            <a href="{{ route('register') }}">新規会員登録はこちら</a>
        </div>
    </div>
    </form>
    </div>
</div>
</body>
