@extends('layouts.account')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-4 m-auto py-5">
        <div class="wrapper">
          @if ($errors->any())
            <div class="text-danger">
              <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
              </ul>
            </div>
          @endif
          <form action="{{ url('/login') }}" method="post" name="Login_Form" class="form-signin">
            @csrf
            <h3 class="form-signin-heading">ログイン</h3>
            <hr class="colorgraph"><br>

            <input type="text" class="form-control mb-3" name="email" placeholder="メールアドレスを入力してください" required="" autofocus="" />
            <input type="password" class="form-control mb-3" name="password" placeholder="パスワードを入力してください" required=""/>

            <button class="btn btn-lg btn-primary btn-block mx-auto d-block w-100"  name="Submit" value="ログイン" type="Submit">ログイン</button>
          </form>			
        </div>
    </div>
  </div>
</div>
@endsection

