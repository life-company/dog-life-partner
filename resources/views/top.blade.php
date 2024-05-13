@extends('layouts.app')

@section('content')
<main>
    <section class="container">
        <h1 class="h4 text-center my-3">里親探し中の<span class="underline_black">ワンチャン</span>が沢山います</h1>
        <div class="row m-auto">
            @forelse ($dogs as $dog)
                <div class="card col-md-3 col-xs-6 ms-auto me-auto mb-5 p-0" style="width: 18rem;">
                    <img src="{{ $dog->imageUrl }}" class="card-img-top" alt="{{ $dog->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $dog->title }} / {{ $dog->petLimitDate }}</h5>
                        <p class="card-text">{{ $dog->petSubCategory }} / {{ $dog->petSex }} / {{ $dog->petArea }}</p>
                        <a href="{{ $dog->link }}" class="btn btn-primary">ワンちゃんの詳細を見る</a>
                    </div>
                </div>
            @empty
                <p class="text-center">現在里親を探しているワンちゃんはいないみたいです。</p>
            @endforelse
        </div><!-- /.row -->
    </section>
</main>
@endsection