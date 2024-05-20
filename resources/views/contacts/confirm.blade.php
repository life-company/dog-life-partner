@extends('layouts.app')

@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-5 col-sm-12 mx-auto">
            <h2 class="fs-1 mb-5 text-center fw-bold">お問い合わせ確認画面</h2>
            <form method="post" action="/contact/send">
                @csrf
                @method('put')
                <div class="mb-3">
                    <p>{{$data->name}}</p>
                    <input type="hidden" class="form-control" name="name" placeholder="田中 太郎" value="{{$data->name}}">
                </div>
                <div class="mb-3">
                    <p>{{$data->name_kana}}</p>
                    <input type="hidden" class="form-control" name="name_kana" placeholder="たなか たろう" value="{{$data->name_kana}}">
                </div>
                <div class="mb-3">
                    <p>{{$data->company}}</p>
                    <input type="hidden" class="form-control" name="company" placeholder="株式会社ライフ" value="{{$data->company}}">
                </div>
                <div class="mb-3">
                    <p>{{$data->postnumber}}</p>
                    <input type="hidden" class="form-control" name="postnumber" placeholder="123-4567" value="{{$data->postnumber}}">
                </div>
                <div class="mb-3">
                    <p>{{$data->address}}</p>
                    <input type="hidden" class="form-control" name="address" placeholder="東京都トマト区1-1-1" value="{{$data->address}}">
                </div>
                <div class="mb-3">
                    <p>{{$data->mailaddress}}</p>
                    <input type="hidden" class="form-control" name="mailaddress" placeholder="メールアドレス（必須）" value="{{$data->mailaddress}}">
                </div>
                <div class="mb-3">
                    <p>{{$data->phonenumber}}</p>
                    <input type="hidden" class="form-control" name="phonenumber" placeholder="電話番号" value="{{$data->phonenumber}}">
                </div>
                <div class="mb-4">
                    <p>{{$data->contacttext}}</p>
                    <textarea class="form-control d-none" name="contacttext" rows="5" placeholder="メッセージを入力してください">{{$data->contacttext}}</textarea>
                </div>
                
                <div class="text-center pt-4 col-md-6 offset-md-3 mb-5">
                    <button type="submit" class="btn btn-primary w-100">送信</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
