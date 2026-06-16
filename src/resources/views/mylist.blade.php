@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/mylist.css') }}">
@endsection

@section('content')

<h1>マイリスト</h1>

<div class="mylist-container">

@forelse($items as $item)

    <div class="mylist-card">

        <a href="/item/{{ $item->id }}">

            <img src="{{ asset('storage/' . $item->image_path) }}" class="mylist-img">

            <p>{{ $item->name }}</p>

        </a>

    </div>

@empty

    <p>いいねした商品はありません</p>

@endforelse

</div>

@endsection