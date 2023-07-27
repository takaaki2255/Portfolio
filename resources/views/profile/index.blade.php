@extends('layouts.front')
@section('title', 'COOKMEMOS-プロフィール')

@section('content')
    <div class="container">
        <div class="titles text-left h1 col-md-10 mx-auto">PROFILE</div>
        <hr color="#c0c0c0">
        <div class="main col-md-10 mx-auto">
            <div class="common">
                <div　class=text-left>氏名</div>
                <div class="primary h2">
                    {{ $profile->name }}
                </div>
                <div>年齢</div>
                <div class="primary h2">
                    {{ $profile->age }}
                </div>
                <div class="">スキル</div>
                <p class="secondary h5">{{ $profile->skill }}</p>
                <div class="">経歴</div>
                <p class="secondary h5">{{ $profile->career }}</p>
            </div>
        </div>
        {{--
        <hr color="#c0c0c0">
        <div class="row">
            <div class="posts col-md-8 mx-auto mt-3">
                @foreach($posts as $post)
                    <div class="post">
                        <div class="row">
                            <div class="text col-md-6">
                                <div class="date">
                                    {{ $post->updated_at->format('Y年m月d日') }}
                                </div>
                                <div class="primary">
                                    {{ Str::limit($post->name, 15) }}
                                </div>
                                <div class="primary">
                                    {{ Str::limit($post->age, 6) }}
                                </div>
                                <div class="secondary mt-3">
                                    {{ Str::limit($post->skill, 400) }}
                                </div>
                                <div class="secondary mt-3">
                                    {{ Str::limit($post->career, 1300) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr color="#c0c0c0">
                @endforeach
            </div>
        </div>
        --}}
    </div>
@endsection
