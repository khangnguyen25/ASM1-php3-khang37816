@extends('layouts.app')

@section('content')
    <h2 class="card-header">Sửa Bài Viết</h2>
    <div class="card">
        <form action="{{ route('articles.update', $article->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Tiêu Đề</label>
                <input type="text" id="title" name="title" value="{{ $article->title }}" required>
            </div>
            <div class="form-group">
                <label for="content">Nội Dung</label>
                <textarea id="content" name="content" required>{{ $article->content }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Cập Nhật</button>
        </form>
    </div>
@endsection
