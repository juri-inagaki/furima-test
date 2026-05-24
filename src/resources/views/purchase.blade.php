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

        <a href="" class="logout-btn">
            ログアウト
        </a>

        <a href="" class="mypage-btn">
            マイページ
        </a>

        <a href="" class="sell-btn">
            出品
        </a>

    </div>

</header>

<div class="purchase-page">

    <!-- 左 -->
    <div class="purchase-left">

        <div class="item-box">

            <img src="{{ asset('storage/items/' . $item['image']) }}" alt="">

            <div class="item-info">

                <h2>{{ $item['name'] }}</h2>

                <p>¥ {{ number_format($item['price']) }}</p>

            </div>

        </div>

        <!-- 支払い方法 -->
        <div class="payment-box">

            <h3>支払い方法</h3>

            <select>
                <option>選択してください</option>
                <option>コンビニ払い</option>
                <option>カード支払い</option>
            </select>

        </div>

        <!-- 配送先 -->
        <div class="address-box">

            <div class="address-header">

                <h3>配送先</h3>

                <a href="">変更する</a>

            </div>

            <p>
                〒 XXX-YYYY
            </p>

            <p>
                ここには住所と建物が入ります
            </p>

        </div>

    </div>

    <!-- 右 -->
    <div class="purchase-right">

        <div class="summary-box">

            <div class="summary-row">

                <p>商品代金</p>

                <p>¥ {{ number_format($item['price']) }}</p>

            </div>

            <div class="summary-row">

                <p>支払い方法</p>

                <p>コンビニ払い</p>

            </div>

        </div>

        <button class="buy-btn">
            購入する
        </button>

    </div>

</div>

</body>

</html>