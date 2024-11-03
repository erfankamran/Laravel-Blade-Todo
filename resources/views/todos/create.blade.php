@extends('layout.master')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="">ساخت وظیفه جدید</h5>
            <a href="{{route('todo.index')}}" class="btn btn-dark">بازگشت</a>
        </div>
        <div class="card-body">
            <form action="{{ route('todo.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label">تصویر</label>
                    <input type="file" name="image" class="form-control">
                    <div class="form-text text-danger">@error('image') {{ $message }} @enderror</div>
                </div>
                <div class="mb-3">
                    <label class="form-label">عنوان</label>
                    <input type="text" name="title" class="form-control">
                    <div class="form-text text-danger">@error('title') {{ $message }} @enderror</div>
                </div>
                <div class="mb-3">
                    <label class="form-label">دسته بندی</label>
                    <select class="form-select" name="category_id">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                        @endforeach
                    </select>
                    <div class="form-text text-danger">@error('category_id') {{ $message }} @enderror</div>
                </div>
                <div class="mb-3">
                    <label class="form-label">توضیحات</label>
                    <textarea class="form-control" name="description" rows="3"></textarea>
                    <div class="form-text text-danger">@error('description') {{ $message }} @enderror</div>
                </div>
                <button type="submit" class="btn btn-secondary">ثبت</button>
            </form>
        </div>
    </div>
@endsection
