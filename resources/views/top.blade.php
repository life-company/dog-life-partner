@extends('layouts.app')

@section('content')
<main>
    <section class="container">
        <h1 class="h4 text-center my-3">里親探し中の<span class="underline_black">ワンチャン</span>が沢山います</h1>
        <div class="row m-auto">
            @if(session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
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

            <div class="pagination mb-3">
                @if ($dogs->onFirstPage())
                    <span class="d-inline-block mx-auto btn">前へ</span>
                @else
                    <a href="{{ $dogs->previousPageUrl() }}" class="d-inline-block mx-auto btn btn-success">前へ</a>
                @endif


                @if ($dogs->hasMorePages())
                    <a href="{{ $dogs->nextPageUrl() }}" class="d-inline-block mx-auto btn btn-success">次へ</a>
                @else
                    <span class="d-inline-block mx-auto btn">次へ</span>
                @endif
            </div>
        </div><!-- /.row -->
    </section>
</main>
@endsection