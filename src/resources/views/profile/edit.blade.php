@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/profile-edit.css') }}">
@endsection

@section('content')

<div class="profile-edit-container">

    <h1>プロフィール設定</h1>

  <form action="/mypage/profile" method="POST" enctype="multipart/form-data">

    @csrf

    <div class="profile-image-area">

        <div class="profile-image">

            @if(Auth::user()->profile_image)

                <img
                    src="{{ asset('storage/' . Auth::user()->profile_image) }}"
                    alt="プロフィール画像">

            @endif

        </div>

        <input type="file" name="profile_image">

    </div>

    <div class="form-group">
        <label>ユーザー名</label>
        <input
            type="text"
            name="name"
            value="{{ Auth::user()->name }}">
    </div>

    <div class="form-group">
        <label>郵便番号</label>
        <input
            type="text"
            name="postcode"
            value="{{ Auth::user()->postcode }}">
    </div>

    <div class="form-group">
        <label>住所</label>
        <input
            type="text"
            name="address"
            value="{{ Auth::user()->address }}">
    </div>

    <div class="form-group">
        <label>建物名</label>
        <input
            type="text"
            name="building"
            value="{{ Auth::user()->building }}">
    </div>

    <button type="submit" class="update-btn">
        更新する
    </button>

</form>

</div>

@endsection