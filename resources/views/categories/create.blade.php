@extends('layout.master')

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="">ساخت دسته بندی</h5>
        <a href="#" class="btn btn-dark">بازگشت</a>
    </div>
    <div class="card-body">
        <form action="{{ route('category.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">عنوان</label>
                <input type="text" name="title" class="form-control">
                <div class="form-text text-danger">@error('title') {{ $message }} @enderror</div>
            </div>
            <button type="submit" class="btn btn-secondary">ثبت</button>
        </form>
    </div>
</div>
@endsection