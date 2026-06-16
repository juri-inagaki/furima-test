@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')

<div class="item-page">

    <div class="tab-menu">
        <a href="" class="active">おすすめ</a>
        <a href="/mylist">マイリスト</a>
    </div>

    <div class="item-list">

        @foreach ($items as $item)

            <a href="/item/{{ $item->id }}" class="item-link">

                <div class="item-card">

                    <div class="item-image">
                        <img src="{{ asset('storage/' . $item->image_path) }}" alt="">
                    </div>

                    @if(in_array($item->id, $soldItems))
                        <div class="sold">SOLD</div>
                    @endif

                    <p>{{ $item->name }}</p>

                </div>

            </a>

        @endforeach

    </div>

</div>

@endsection