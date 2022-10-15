@extends('layouts.common')

@section('title', 'My Profile')

@section('content')

    @if (empty($profile))
        <h2><a href="{{ route('user_profile.create') }}">
                プロフィールを設定する
            </a></h2>
    @else
        <h2>年齢</h2>
        {{ $profile->age }}
        <h2>住所</h2>
        {{ $profile->address }}

        <div>
            <a href="{{ route('user_profile.edit', ['user_profile' => $profile->id]) }}">
                プロフィールを編集する
            </a>

            <form action="{{ route('user_profile.destroy', ['user_profile' => $profile->id]) }}" method="post">
                @csrf
                @method('DELETE')
                <button>プロフィールを削除する</button>
            </form>
        </div>
    @endif
@endsection
