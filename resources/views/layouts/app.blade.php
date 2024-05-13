<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <title>{{ config('app.name') }}</title>
        @if(env('APP_ENV') === 'local')
          @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
    </head>
    <body>
    <header>
        <h1 class="h6 bg-success text-white py-2 ps-2 m-0">静岡県で多くの犬の命を救いたいです</h1>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="/">ホーム</a></li>
                @if (Route::has('login'))
                    @auth
                        <li class="nav-item"><a class="nav-link" href="{{ url('/mypage') }}">マイページ</a></li>
                        @if (Route::has('logout'))
                            <li class="nav-item">
                                <form method="POST" action="{{ route('logout') }}" style="display:inline;">
                                    @csrf
                                    <button type="submit" class="nav-link">ログアウト</button>
                                </form>
                            </li>
                        @endif
                    @else
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">ログイン</a></li>
                        @if (Route::has('register'))
                            <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">無料会員登録</a></li>
                        @endif
                    @endauth
                @endif
                <!-- <li class="nav-item"><a class="nav-link" href="#">お知らせ</a></li> -->
                <li class="nav-item"><a class="nav-link" href="/terms-of-service">利用規約</a></li>
                <li class="nav-item"><a class="nav-link" href="/contact">お問い合わせ</a></li>
            </ul>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer class="bg-success text-white py-2">
        <p class="text-center m-0">&copy; 里親募集掲示板 2024 <?= date('Y') != 2024 ? '-' . date('Y') : '' ?></p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </body>
</html>