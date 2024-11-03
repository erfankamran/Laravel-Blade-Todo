@extends('layout.master')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="">ویرایش دسته بندی</h5>
            <a href="{{ route('category.index') }}" class="btn btn-dark">بازگشت</a>
        </div>
        <div class="card-body">
            <form action="{{ route('category.update', ['category' => $category->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label">عنوان</label>
                    <input type="text" name="title" value="{{ $category->title }}" class="form-control">
                    <div class="form-text text-danger">
                        @error('title')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-secondary">ثبت</button>
            </form>
        </div>
    </div>
@endsection
