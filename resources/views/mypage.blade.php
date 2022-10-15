@extends('layouts.common')

@section('title', 'My Page')

@section('content')
<h2>ようこそ「{{ $user->name}}」さん</h2>

<div>
	<a href="{{ route('post.create') }}">投稿作成</a>
</div>

<a href="{{ route('user_profile.index') }}">プロフィール詳細</a>

<h3>投稿一覧</h3>
<ul>
	@foreach ($posts as $post)
		<li>{{ $post-> title }}</li>
	@endforeach
</ul>


<ul>
	@foreach ($has_many_posts as $post)
		<li>{{ $post-> title }}</li>
	@endforeach
</ul>
@endsection