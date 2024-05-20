@extends('layouts.account')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-4 mx-auto">
        @if ($errors->any())
            <div class="text-danger">
              <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
              </ul>
            </div>
          @endif
        <form action="{{ route('register') }}" method="post" class="my-5">
          @csrf
          <div class="mb-3">
            <label class="form-label">ニックネーム</label>
            <input type="text" class="form-control" name="name"  required="">
          </div>
          <div class="mb-3">
            <label class="form-label">メールアドレス</label>
            <input type="email" class="form-control" name="email"  required="">
          </div>
          <div class="mb-3">
            <label class="form-label">パスワード</label>
            <input type="password" class="form-control" name="password"  required="">
          </div>
          <div class="mb-3">
            <label class="form-label">パスワード（確認）</label>
            <input type="password" class="form-control" name="password_confirmation"  required="">
          </div>
          <button type="submit" class="btn btn-primary d-block w-100">新規会員登録をする</button>
      </form>
      </div><!-- /.col-4 mx-auto -->
    </div><!-- /.row -->
  </div><!-- /.container -->
@endsection

