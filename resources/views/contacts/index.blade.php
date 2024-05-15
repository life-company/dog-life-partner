@extends('layouts.app')

@section('content')
<div class="content">
    <div class="row">
        <div class="col-5 mx-auto">
            <h2 class="fs-1 mb-5 text-center fw-bold">お問い合わせ</h2>
            <form method="post" action="mail.php">
                <div class="mb-3">
                    <input type="text" class="form-control" name="お名前" placeholder="田中 太郎" value="">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" name="ふりがな" placeholder="たなか たろう" value="">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" name="企業/団体名" placeholder="株式会社ライフ" value="">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" name="郵便番号" placeholder="123-4567" value="">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" name="住所" placeholder="東京都トマト区1-1-1" value="">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" name="メールアドレス" placeholder="メールアドレス（必須）" value="">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" name="電話番号" placeholder="電話番号" value="">
                </div>
                <div class="mb-4">
                    <textarea class="form-control" name="お問い合わせ内容" rows="5" placeholder="メッセージを入力してください"></textarea>
                </div>
                <div class="form-check mb-4">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                    <label class="form-check-label" for="flexCheckIndeterminate">
                        利用規約に同意します。<a href="" target="_blank" rel="noopener noreferrer" class="text-decoration-underline text-dark">プライバシーポリシーはこちら</a>
                    </label>
                </div>
                <div class="text-center pt-4 col-md-6 offset-md-3 mb-5">
                    <button type="submit" class="btn btn-primary w-100">送信</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
