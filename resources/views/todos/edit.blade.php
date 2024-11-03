@extends('layout.master')

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="">ویرایش وظیفه</h5>
        <a href="{{ route('todo.index') }}" class="btn btn-dark">بازگشت</a>
    </div>
    <div class="card-body">
        <form action="{{ route('todo.update', ['todo' => $todo->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <div class="mb-3">
                    <img width="230" class="rounded" src="{{ asset('images/' . $todo->image) }}" alt="">
                </div>
                <label class="form-label">تصویر</label>
                <input type="file" name="image" class="form-control">
                <div class="form-text text-danger">
                    @error('image')
                    {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">عنوان</label>
                <input type="text" name="title" value="{{ $todo->title }}" class="form-control">
                <div class="form-text text-danger">
                    @error('title')
                    {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">دسته بندی</label>
                <select class="form-select" name="category_id">
                    @foreach ($categories as $category)
                    <option {{ $todo->category_id == $category->id ? 'selected' : '' }} value="{{ $category->id }}">
                        {{ $category->title }}
                    </option>
                    @endforeach
                </select>
                <div class="form-text text-danger">
                    @error('category_id')
                    {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">توضیحات</label>
                <textarea class="form-control" name="description" rows="3">{{ $todo->description }}</textarea>
                <div class="form-text text-danger">
                    @error('description')
                    {{ $message }}
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-secondary">ثبت</button>
        </form>
    </div>
</div>
@endsection