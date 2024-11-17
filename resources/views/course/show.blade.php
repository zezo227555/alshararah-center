@extends('layouts.admin')

@section('content')
<div class="container mt-3">
    <div class="card rtl">
        <div class="card-header">
            {{ $course->created_at->format('Y-m-d') }}
        </div>
        <div class="card-body">
          <h5 class="card-title">{{ $course->title }}</h5>
          <div class="row">
            <div class="col-sm-4">
                <img class="rounded" src="{{ asset('assets/img/course') }}/{{ $course->image }}" alt="course" height="300" width="300">
            </div>
            <div class="col-sm-7 border rounded p-3">
                <h5>الاسم: {{ $course->name }}</h5>
                <h6>السعر: {{ $course->price }}</h6>
                <hr>
                <p class="card-text">{{ $course->details }}</p>
            </div>
          </div>
        </div>
        <div class="card-footer">
            <a href="{{ route('course.edit', $course->id) }}" class="btn btn-primary">تعديل الكورس</a>
        </div>
    </div>
</div>
@endsection
