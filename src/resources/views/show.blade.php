@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/show.css') }}">
@endsection

@section('content')

<div class="detail-page">

    <!-- 左 -->
    <div class="detail-image">

        <img src="{{ asset('storage/' . $item->image_path) }}" alt="商品画像">

    </div>

    <!-- 右 -->
    <div class="detail-content">

        <h1 class="item-name">
            {{ $item->name }}
        </h1>

        <p class="brand-name">
            {{ $item->brand_name}}
        </p>

        <p class="price">
            ¥{{ number_format($item->price) }}
            <span>(税込)</span>
        </p>

        <!-- アイコン -->
<div class="item-icons">

 <form action="/like/{{ $id }}" method="POST">
    @csrf

    <button type="submit" style="background:none;border:none;cursor:pointer;">

        @if($liked)
            <img src="{{ asset('image/heart-pink.png') }}" alt="いいね">
        @else
            <img src="{{ asset('image/heart.png') }}" alt="いいね">
        @endif

    </button>

</form>

    <div class="icon-box">
        <img src="{{ asset('image/comment.png') }}" alt="コメント" class="icon-image">
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
                {{ $item->description }}
            </p>

        </div>

        <!-- 商品情報 -->
        <div class="section">

            <h2>商品の情報</h2>

        <p>
    カテゴリー：
    未設定
</p>

<p>
    商品の状態：
    {{ $item->condition_id }}
</p>

        </div>

        <!-- コメント -->
<div class="section">

    <h2>コメント({{ $comments->count() }})</h2>

    @foreach($comments as $comment)

        <div style="margin-bottom:15px;">

            <strong>
                {{ $comment->user->name ?? 'ユーザー' }}
            </strong>

            <p>
                {{ $comment->comment }}
            </p>

        </div>

    @endforeach

</div>

        <!-- コメント入力 -->
<div class="section">

    <h2>商品へのコメント</h2>

    <form action="/comment/{{ $item->id }}" method="POST">

        @csrf

        <textarea
            name="comment"
            class="comment-area"
            required
        ></textarea>

        <button type="submit" class="comment-btn">
            コメントを送信する
        </button>

    </form>

</div>

    </div>

</div>


@endsection