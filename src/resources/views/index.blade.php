@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')

<div class="item-page">

    <!-- タブ -->
    <div class="tab-menu">
        <a href="" class="active">おすすめ</a>
        <a href="">マイリスト</a>
    </div>

    <!-- 商品一覧 -->
    <div class="item-list">

        <a href="/item/1" class="item-link">
            <div class="item-card">
                <div class="item-image">
                    <img src="{{ asset('storage/items/Armani+Mens+Clock.jpg') }}" alt="商品画像">
                </div>
                <p>時計</p>
            </div>
        </a>

        <a href="/item/2" class="item-link">
            <div class="item-card">
                <div class="item-image">
                    <img src="{{ asset('storage/items/HDD+Hard+Disk.jpg') }}" alt="商品画像">
                </div>
                <p>HDD</p>
            </div>
        </a>

        <a href="/item/3" class="item-link">
            <div class="item-card">
                <div class="item-image">
                    <img src="{{ asset('storage/items/iLoveIMG+d.jpg') }}" alt="商品画像">
                </div>
                <p>玉ねぎ３束</p>
            </div>
        </a>

        <a href="/item/4" class="item-link">
            <div class="item-card">
                <div class="item-image">
                    <img src="{{ asset('storage/items/Leather+Shoes+Product+Photo.jpg') }}" alt="商品画像">
                </div>
                <p>革靴</p>
            </div>
        </a>

        <a href="/item/5" class="item-link">
            <div class="item-card">
                <div class="item-image">
                    <img src="{{ asset('storage/items/Living+Room+Laptop.jpg') }}" alt="商品画像">
                </div>
                <p>ノートPC</p>
            </div>
        </a>

        <a href="/item/6" class="item-link">
            <div class="item-card">
                <div class="item-image">
                    <img src="{{ asset('storage/items/Music+Mic+4632231.jpg') }}" alt="商品画像">
                </div>
                <p>マイク</p>
            </div>
        </a>

        <a href="/item/7" class="item-link">
            <div class="item-card">
                <div class="item-image">
                    <img src="{{ asset('storage/items/Purse+fashion+pocket.jpg') }}" alt="商品画像">
                </div>
                <p>ショルダーバッグ</p>
            </div>
        </a>

        <a href="/item/8" class="item-link">
            <div class="item-card">
                <div class="item-image">
                    <img src="{{ asset('storage/items/Tumbler+souvenir.jpg') }}" alt="商品画像">
                </div>
                <p>タンブラー</p>
            </div>
        </a>

        <a href="/item/9" class="item-link">
            <div class="item-card">
                <div class="item-image">
                    <img src="{{ asset('storage/items/Waitress+with+Coffee+Grinder.jpg') }}" alt="商品画像">
                </div>
                <p>コーヒーミル</p>
            </div>
        </a>

        <a href="/item/10" class="item-link">
            <div class="item-card">
                <div class="item-image">
                    <img src="{{ asset('storage/items/mekeup.jpg') }}" alt="商品画像">
                </div>
                <p>メイクセット</p>
            </div>
        </a>

    </div>

</div>

@endsection