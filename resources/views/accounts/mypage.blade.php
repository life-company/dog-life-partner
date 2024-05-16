@extends('layouts.app')

@section('content')
<section class="container">
    <div class="row m-auto">
        <div class="col-6 mx-auto">
            <h1>マイページ</h1>
            <img src="{{ asset('images/logo.png') }}" alt="ユーザー画像">
            <p>ユーザー名</p>
            <p>会員ランク</p>
            <p>ユーザーID</p>
            <p>フォロー数</p>
            <p>フォロワー数</p>
            <h2>目的</h2>
            <p>ペットの写真を投稿する</p>
            <p>ペットの記事を投稿する</p>
        </div>
    </div><!-- /.row -->
</section>
@endsection