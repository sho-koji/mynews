@extends('layouts.profile_front')

@section('content')
    <div class="container">
        <div class="row">
            <div class="page_title mx-auto">
                <h1>プロフィール作成更新一覧</h1>
            </div>
        </div>
        <hr color="#c0c0c0">
        @if (!is_null($headline))
            <div class="row">
                <div class="headline col-md-10 mx-auto">
                    <span> NEW !! (・∀・) </span>
                    <div class="row">
                        <div class="topleft col-md-6">
                            <div class="name p-1 mx-auto">
                                    <h2>氏名：{{ str_limit($headline->name, 70) }}</h2>
                            </div>
                            <div class="gender pl-2 mx-auto">
                                    <p>性別：{{ str_limit($headline->gender, 70) }}</p>
                            </div>
                            <div class="hobby pl-2 mx-auto">
                                    <p>趣味：{{ str_limit($headline->hobby, 100) }}</p>
                            </div>
                        </div>
                        
                        <div class="topright col-md-6">
                            <p class="introduction mx-auto">{{ str_limit($headline->introduction, 650) }}</p>
                        </div>
                        
                    </div>
                </div>
            </div>
        @endif
        <hr color="#c0c0c0">
        <div class="row">
            <div class="posts col-md-8 mx-auto mt-3">
                @foreach($posts as $post)
                    <div class="post">
                        <div class="row">
                            <div class="postleft col-md-6">
                                <div class="date mb-1">
                                    {{ $post->updated_at->format('[Y年m月d日]') }}
                                </div>
                                <div class="name mx-auto">
                                    氏名：{{ str_limit($post->name, 150) }}
                                </div>
                                <div class="gender mt-1 mx-auto">
                                    性別；{{ str_limit($post->gender, 50) }}
                                </div>
                                <div class="hobby mx-auto">
                                    趣味；{{ str_limit($post->hobby, 150) }}
                                </div>
                            </div>
                            <div class="postright col-md-6 mt-4">
                                <p class="introduction mx auto">{{ str_limit($post->introduction, 200) }}</p>
                            </div>
                        </div>
                    </div>
                    <hr color="#c0c0c0">
                    <!--hrの位置はここでOK？要検討。-->
                @endforeach
            </div>
        </div>
    </div>
@endsection