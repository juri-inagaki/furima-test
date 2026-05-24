<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>商品詳細</title>

    <link rel="stylesheet" href="{{ asset('css/show.css') }}">
</head>

<body>

    <!-- ヘッダー -->
    <header class="header">

        <img src="{{ asset('image/COACHTECHヘッダーロゴ.png') }}" alt="ロゴ">

        <!-- 検索 -->
        <div class="search-box">
            <input type="text" placeholder="なにをお探しですか？">
        </div>

        <!-- 出品ボタン -->
        <a href="" class="sell-btn">
        出品
        </a>

    </header>

    <div class="detail-page">

        <!-- 左 -->
        <div class="detail-image">

            <img src="{{ asset('storage/items/' . $item['image']) }}" alt="商品画像">

        </div>

        <!-- 右 -->
        <div class="detail-content">

            <h1 class="item-name">
                {{ $item['name'] }}
            </h1>

            <p class="brand-name">
                {{ $item['brand'] }}
            </p>

            <p class="price">
                ¥{{ number_format($item['price']) }}
                <span>(税込)</span>
            </p>

            <!-- アイコン -->
            <div class="item-icons">

                <div class="icon-box">
                    ♡
                    <p>0</p>
                </div>

                <div class="icon-box">
                    💬
                    <p>0</p>
                </div>

            </div>

            <!-- 購入ボタン -->
           <a href="/purchase/{{ $id }}" class="purchase-btn">
           購入手続きへ
           </a>
            <!-- 商品説明 -->
            <div class="section">

                <h2>商品説明</h2>

                <p>
                    {{ $item['description'] }}
                </p>

            </div>

            <!-- 商品情報 -->
            <div class="section">

                <h2>商品の情報</h2>

                <p>
                    カテゴリー：

                    @foreach ($item['category'] as $category)

                        <span class="category">
                            {{ $category }}
                        </span>

                    @endforeach

                </p>

                <p>
                    商品の状態：
                    {{ $item['condition'] }}
                </p>

            </div>

            <!-- コメント -->
            <div class="section">

                <h2>コメント(0)</h2>

            </div>

            <!-- コメント入力 -->
            <div class="section">

                <h2>商品へのコメント</h2>

                <textarea class="comment-area"></textarea>

                <button class="comment-btn">
                    コメントを送信する
                </button>

            </div>

        </div>

    </div>

</body>

</html>