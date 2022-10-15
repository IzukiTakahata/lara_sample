@extends('layouts.common')

@section('title', 'My Profile Create')
@section('content')
    <form
        @if (empty($profile)) 
			action="{{ route('user_profile.store') }}" 
		@else
			action="{{ route('user_profile.update', ['user_profile' => $profile->id]) }}" 
		@endif
        method="post">
        @csrf
        @if (!empty($profile))
            @method('PUT')
        @endif
        <div>
            <label for="">年齢</label>
            <input type="text" name="age" value="@if (!empty($profile)) {{ $profile->age }} @endif">
        </div>

        <div>
            <label for="">住所</label>
            <input type="text" name="address" value="@if (!empty($profile)) {{ $profile->address }} @endif">
        </div>

        <button>登録</button>
    </form>
@endsection
