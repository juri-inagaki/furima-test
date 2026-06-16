@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/sell.css') }}">
@endsection

@section('content')

<div class="sell-container">

    <h1>商品の出品</h1>

    <form action="/sell" method="POST" enctype="multipart/form-data">
        @csrf

        <h3>商品画像</h3>

        <div class="image-box">

        <label class="image-upload-btn">
        画像を選択する
        <input type="file" name="image" hidden>
        </label>

        <div>
        <img id="preview" style="max-width:200px; margin-top:10px; display:none;">
        </div>

        </div>



        <h2>商品の詳細</h2>

        <h3>カテゴリー</h3>

        <div class="category-list">

        @php
        $categories = ['ファッション','家電','インテリア','レディース','メンズ','コスメ','本','ゲーム','スポーツ','キッチン'];
        @endphp

        @foreach($categories as $cat)
         <label class="category-btn">
        <input type="checkbox" name="category[]" value="{{ $cat }}">
        <span>{{ $cat }}</span>
        </label>
         @endforeach

        </div>

        <h3>商品の状態</h3>

        <select name="condition_id">
            <option value="">選択してください</option>
            <option value="1">良好</option>
            <option value="2">目立った傷や汚れなし</option>
            <option value="3">やや傷や汚れあり</option>
            <option value="4">状態が悪い</option>
        </select>

        <h2>商品名と説明</h2>

        <h3>商品名</h3>
        <input type="text" name="name">

        <h3>ブランド名</h3>
        <input type="text" name="brand_name">

        <h3>商品の説明</h3>
        <textarea name="description"></textarea>

        <h3>販売価格</h3>
        <input type="number" name="price">

        <button type="submit" class="submit-btn">
            出品する
        </button>

    </form>

</div>

<script>
document.getElementById('imageInput').addEventListener('change', function(e) {
    const file = e.target.files[0];

    if (file) {
        const reader = new FileReader();

        reader.onload = function(e) {
            const preview = document.getElementById('preview');
            preview.src = e.target.result;
            preview.style.display = 'block';
        }

        reader.readAsDataURL(file);
    }
});
</script>

@endsection