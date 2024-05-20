@extends('layouts.app')

@section('content')
<section class="container">
    <div class="row m-auto">
        <div class="col-lg-6 col-md-12 ">
            <div class="profile-card my-5">
                <div class="avatar"></div>
                <div class="name">{{ $user->name }}</div>
                <div class="role">{{ $user->m_member_ranks->rank_name }}</div>
                <div class="user-id">ユーザーID：{{ $user->id }}</div>
                <div class="follow d-none">
                    <div>フォロワー<br>0</div>
                    <div>フォロー<br>0</div>
                </div>
            </div>

            <h2 class="text-center">サービスを利用する</h2>
            <ul>
                <li><a href="#">里親を探す</a></li>
                <li><a href="#">里親のやりとり一覧</a></li>
            </ul>
        </div>
    </div><!-- /.row -->
</section>
@endsection