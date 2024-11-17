@extends('layouts.admin')

@section('content')
<div class="container mt-3">
    <div class="card rtl">
        <div class="card-header">
            {{ $news->created_at->format('Y-m-d') }}
        </div>
        <div class="card-body">
          <h5 class="card-title">{{ $news->title }}</h5>
          <div class="row">
            <div class="col-sm-4">
                <img class="rounded" src="{{ asset('assets/img/news') }}/{{ $news->image }}" alt="news" height="300" width="300">
            </div>
            <div class="col-sm-7 border rounded p-3">
                <p class="card-text">{{ $news->details }}</p>
            </div>
          </div>
        </div>
        <div class="card-footer">
            <a href="{{ route('news.edit', $news->id) }}" class="btn btn-primary">تعديل الخبر</a>
        </div>
    </div>
</div>
@endsection
