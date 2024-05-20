@extends('layouts.mail')

@section('content')
<div class="content">
    <div class="row">
        <div class="col-5 mx-auto">
            <p>メール送信完了</p>
            <p>氏名：{{ $data['name'] }}</p>
            <p>カナ：{{ $data['name_kana'] }}</p>
            @if (isset($data['company'])) <p>会社名：{{ $data['company'] }}</p> @endif
            <p>郵便番号：{{ $data['postnumber'] }}</p>
            <p>住所：{{ $data['address'] }}</p>
            <p>メールアドレス：{{ $data['mailaddress'] }}</p>
            <p>電話番号：{{ $data['phonenumber'] }}</p>
            <p>お問い合わせ内容：{{ $data['contacttext'] }}</p>
        </div>
    </div>
</div>
@endsection
