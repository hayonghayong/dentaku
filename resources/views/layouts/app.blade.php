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
 <div id="nav-container">
      <div class="bg"></div>
      <div class="button" tabindex="0">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </div>
      <div id="nav-content" tabindex="0">
        <ul>
        <li> <a href="{{url('goodsnew')}}">新規物品登録画面</a></li>
        <li><a href="{{url('goodsall')}}">登録物品一覧</a></li>
        <li>
            <a href="{{url('usersedit/'.Auth::user()->id)}}"
            onclick="event.preventDefault();
            document.getElementById('useredit').submit();">
            会員情報更新 
            </a>
            <form id="useredit" action="{{ url('usersedit/'.Auth::user()->id) }}" method="POST">
            {{ csrf_field() }}
            </form>
        </li>
        <li id="d"><a href="#">お問い合わせ</a></li>
        <li>
            <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            ログアウト
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
            </form>
        </li>
        </ul>
    </div>
    </div>
</div>
<div class="cp_contents">
	<p class="title top-title">{{ Auth::user()->name }} さんの便利電卓</p>
</div>
    @yield('content')
</div>
</body>
</html>
