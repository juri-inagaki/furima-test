@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
@endsection

@section('content')

<div class="mypage-container">

    <div class="profile-area">

        <div class="profile-left">
    <div class="profile-image">

    @if(Auth::user()->profile_image)

        <img
            src="{{ asset('storage/' . Auth::user()->profile_image) }}"
            alt="プロフィール画像">

    @endif

</div>

    <h2>
        {{ Auth::user()->name }}
    </h2>

</div>

       <a href="/mypage/profile" class="edit-btn">
        プロフィールを編集する
        </a>

    </div>

    <div class="tab-menu">

        <a href="#" class="active">
            出品した商品
        </a>

        <a href="#">
            購入した商品
        </a>

    </div>

    <div class="item-list">

        <div class="item-card">
            <div class="item-image">商品画像</div>
            <p>商品名</p>
        </div>

        <div class="item-card">
            <div class="item-image">商品画像</div>
            <p>商品名</p>
        </div>

        <div class="item-card">
            <div class="item-image">商品画像</div>
            <p>商品名</p>
        </div>

        <div class="item-card">
            <div class="item-image">商品画像</div>
            <p>商品名</p>
        </div>

    </div>

</div>

@endsection