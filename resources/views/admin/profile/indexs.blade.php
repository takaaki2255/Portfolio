@extends('layouts.admin')
@section('title', '登録済みのプロフィール一覧')

@section('content')
    <div class="container">
        <div class="row">
            <h2>Myプロフィール</h2></h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="{{ route('admin.profile.add') }}" role="button" 
                class="btn btn-primary">新規作成</a>
            </div>
        </div>
        <div class="row">
            <div class="list-news col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th width="10%">ID</th>
                                <th width="10%">名前</th>
                                <th width="10%">年齢</th>
                                <th width="20%">スキル</th>
                                <th width="40%">経歴</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $profile)
                                <tr>
                                  <th>{{ $profile->id }}</th>
                                  <td>{{ Str::limit($profile->name, 20) }}</td>
                                  <td>{{ Str::limit($profile->age, 5) }}</td>
                                  <td>{{ Str::limit($profile->skill, 100) }}</td>
                                  <td>{{ Str::limit($profile->career, 150) }}</td>
                                  <td>
                                      <div>
                                        <a href="{{ route('admin.profile.edit', ['id' => $profile->id]) }}">編集</a>
                                      </div>
                                      <div>
                                            <a href="{{ route('admin.profile.delete', ['id' => $profile->id]) }}">削除</a>
                                        </div>
                                  </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
