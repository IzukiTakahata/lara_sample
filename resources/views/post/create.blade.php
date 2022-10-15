@extends('layouts.common')

@section('title', 'My Post Create')

@section('content')
    <form
        @if (empty($post)) action="{{ route('post.store') }}" 
@else
	action="{{ route('post.update', ['post' => $post->id]) }}" @endif
        method="post">
        @csrf
        @if (!empty($post))
            @method('PUT')
        @endif
        <div>
            <label for="">タイトル</label>
            <input type="text" name="title" value="@if (!empty($post)) {{ $post->age }} @endif">
        </div>

        <div>
            <label for="">住所</label>
            <textarea name="body" id="" cols="30" rows="10"></textarea>
        </div>

        <button>登録</button>
    </form>
@endsection
