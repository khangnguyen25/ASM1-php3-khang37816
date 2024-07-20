@extends('layouts.app')

@section('content')
    <h2 class="card-header">Danh Sách Bài Viết</h2>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @foreach($articles as $article)
        <div class="card">
            <div class="card-header">{{ $article->title }}</div>
            <div class="card-body">
                <p>{{ \Str::limit($article->content, 150) }}</p>
                <a href="{{ route('articles.show', $article->id) }}" class="btn btn-primary">Xem Chi Tiết</a>
                <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-secondary">Sửa</a>
                <form action="{{ route('articles.destroy', $article->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-primary" onclick="return confirm('Bạn có chắc chắn muốn xóa bài viết này?')">Xóa</button>
                </form>
            </div>
        </div>
    @endforeach
@endsection
