@extends('layouts.account')

@section('content')
<div class = "container">
  <div class="wrapper">
    @if ($errors->any())
      <div class="login_error">
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

      <input type="text" class="form-control" name="email" placeholder="Username" required="" autofocus="" />
      <input type="password" class="form-control" name="password" placeholder="Password" required=""/>

      <button class="btn btn-lg btn-primary btn-block"  name="Submit" value="Login" type="Submit">Login</button>
    </form>			
  </div>
</div>
@endsection

