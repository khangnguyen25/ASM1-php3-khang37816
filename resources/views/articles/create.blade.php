@extends('layouts.app')

@section('content')
    <h2 class="card-header">Tạo Bài Viết Mới</h2>
    <div class="card">
        <form action="{{ route('articles.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Tiêu Đề</label>
                <input type="text" id="title" name="title" value="{{ old('title') }}" required>
            </div>
            <div class="form-group">
                <label for="content">Nội Dung</label>
                <textarea id="content" name="content" required>{{ old('content') }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Lưu</button>
        </form>
    </div>
@endsection
