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

    <form action="{{ request()->is('mylist') ? '/mylist' : '/' }}" method="GET">

        <input
            type="text"
            name="keyword"
            value="{{ request('keyword') }}"
            placeholder="なにをお探しですか？"
        >

    </form>

</div>
    </div>
    <nav class="nav">
    　　@if(Auth::check())

        <form action="/logout" method="POST">
            @csrf

            <button type="submit" class="logout-btn">
                ログアウト
            </button>
        </form>


    @else

        <a href="/login">ログイン</a>
        @endif
        <a href="/mypage">マイページ</a>
        <a href="/sell" class="sell-btn">出品</a>
    </nav>

    
    </header>



    
     @yield('content')


</body>
</html>