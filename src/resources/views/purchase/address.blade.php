@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/address.css') }}">
@endsection

@section('content')

<div class="address-container">

    <h2>住所の変更</h2>

    <form action="/purchase/address" method="POST">

        @csrf

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