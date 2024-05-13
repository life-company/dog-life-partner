@extends('layouts.app')

@section('content')
<section class="container">
    <div class="row m-auto">
        <h1>お問い合わせ</h1>
        <form action="" method="POST">
            @csrf
            <input type="text" name="name">
            <input type="email" name="email">
            <textarea name="message"></textarea>
            <input type="submit" value="送信">
        </form>
    </div><!-- /.row -->
</section>
@endsection