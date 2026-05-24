<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>フリマアプリ</title>
    @yield('css')
</head>
<body>

    <!-- ヘッダー -->
    <header class="header">
        <img src="{{ asset('image/COACHTECHヘッダーロゴ.png') }}" alt="ロゴ">

    <!-- 検索 -->
    <div class="search-box">
        <input type="text" placeholder="なにをお探しですか？">
    </div>
    <nav class="nav">
        @if(Auth::check())
        <a href="/login">ログアウト</a>
        @else

        @endif
        <a href="/mypage">マイページ</a>
        <a href="/sell" class="sell-btn">出品</a>
    </nav>

    
    </header>



    
     @yield('content')


</body>
</html>