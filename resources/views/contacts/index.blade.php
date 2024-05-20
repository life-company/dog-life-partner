@extends('layouts.app')

@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-5 col-sm-12 mx-auto">
            <h2 class="fs-1 mb-5 text-center fw-bold">お問い合わせ画面</h2>
            <form method="post" action="/contact/confirm">
                @csrf
                
                <div class="mb-3">
                    <input type="text" class="form-control" name="name" placeholder="田中 太郎" value="">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" name="name_kana" placeholder="たなか たろう" value="">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" name="company" placeholder="株式会社ライフ" value="">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" name="postnumber" placeholder="123-4567" value="">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" name="address" placeholder="東京都トマト区1-1-1" value="">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" name="mailaddress" placeholder="メールアドレス（必須）" value="">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" name="phonenumber" placeholder="電話番号" value="">
                </div>
                <div class="mb-4">
                    <textarea class="form-control" name="contacttext" rows="5" placeholder="メッセージを入力してください"></textarea>
                </div>
                <div class="text-center pt-4 col-md-6 offset-md-3 mb-5">
                    <button type="submit" class="btn btn-primary w-100">送信</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
