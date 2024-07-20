@extends('layouts.app')

@section('content')
    <h2 class="card-header">Chi Tiết Bài Viết</h2>
    <div class="card">
        <h3>{{ $article->title }}</h3>
        <p>{{ $article->content }}</p>
        <a href="{{ route('articles.index') }}" class="btn btn-secondary">Trở Lại</a>
        <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-secondary">Sửa</a>
    </div>
@endsection
