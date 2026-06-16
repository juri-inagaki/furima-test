<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>購入画面</title>

    <link rel="stylesheet" href="{{ asset('css/purchase.css') }}">
</head>

<body>

<header class="header">

    <img src="{{ asset('image/COACHTECHヘッダーロゴ.png') }}" alt="ロゴ">

    <div class="search-box">
        <input type="text" placeholder="なにをお探しですか？">
    </div>

    <div class="header-menu">

        <form action="{{ route('logout') }}" method="POST" style="display:inline;">
            @csrf
            <button type="submit" class="logout-btn">ログアウト</button>
        </form>

        <a href="{{ route('mypage') }}" class="mypage-btn">マイページ</a>

        <a href="{{ route('sell') }}" class="sell-btn">出品</a>

    </div>

</header>

<div class="purchase-page">

    <!-- 左 -->
    <div class="purchase-left">

        <div class="item-box">

            <img src="{{ asset('storage/' . $item->image_path) }}" alt="商品画像">

            <div class="item-info">

                <h2>{{ $item->name }}</h2>

                <p>¥ {{ number_format($item->price) }}</p>

            </div>

        </div>

        <!-- 支払い方法 -->
        <div class="payment-box">

            <h3>支払い方法</h3>

            <select name="payment_method">
                <option value="">選択してください</option>
                <option value="konbini">コンビニ払い</option>
                <option value="card">カード支払い</option>
            </select>

        </div>

        <!-- 配送先 -->
        <div class="address-box">

            <div class="address-header">
                <h3>配送先</h3>

                <a href="/purchase/address/{{ $id }}">変更する</a>
            </div>

            <p>〒 {{ Auth::user()->postcode }}</p>

            <p>
                {{ Auth::user()->address }}
                {{ Auth::user()->building }}
            </p>

        </div>

    </div>

    <!-- 右 -->
    <div class="purchase-right">

        <div class="summary-box">

            <div class="summary-row">
                <p>商品代金</p>
                <p>¥ {{ number_format($item->price) }}</p>
            </div>

            <div class="summary-row">
                <p>支払い方法</p>
                <p>選択してください</p>
            </div>

        </div>

        <form action="/checkout/{{ $id }}" method="POST">

            @csrf

            <input type="hidden" name="payment_method" id="payment_method_input">

            <button class="buy-btn">
                購入する
            </button>

        </form>

    </div>

</div>

<script>
const select = document.querySelector('select');
const hidden = document.getElementById('payment_method_input');

select.addEventListener('change', function () {
    hidden.value = this.value;
});
</script>

</body>
</html>