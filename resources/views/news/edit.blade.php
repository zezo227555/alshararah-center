@extends('layouts.admin')

@section('content')
<form action="{{ route('news.update', $new->id) }}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="container p-3">
        <div class="card">
            <div class="card-header">
                <h4>تعديل الخبر</h4>
            </div>
            <div class="card-body">
                <div class="modal-body rtl">
                    <input type="text" name="title" placeholder="ادخل العنوان" class="form-control" value="{{ $new->title }}">
                    <textarea name="details" class="form-control mt-3" placeholder="ادخل تفاصيل الخبر" rows="5">{{ $new->details }}</textarea>
                    <input type="file" name="image" class="form-control mt-3" placeholder="الصورة">
                </div>
            </div>
            <div class="card-footer">
                <button role="submit" class="btn btn-primary w-25">حفظ</button>
            </div>
        </div>
    </div>
</form>
@endsection
