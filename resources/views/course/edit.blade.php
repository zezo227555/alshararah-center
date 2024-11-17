@extends('layouts.admin')

@section('content')
<form action="{{ route('course.update', $course->id) }}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="container p-3">
        <div class="card">
            <div class="card-header">
                <h4>تعديل بيانات الكورس</h4>
            </div>
            <div class="card-body">
                <div class="modal-body rtl">
                    <input type="text" name="name" placeholder="ادخل الاسم" class="form-control" value="{{ $course->name }}">
                    <select name="type" class="form-control mt-3">
                        <option>اختر نوع الكورس</option>
                        <option value="ادارية" @selected($course->type == 'ادارية')>ادارية</option>
                        <option value="مهنية" @selected($course->type == 'مهنية')>مهنية</option>
                        <option value="لغوية" @selected($course->type == 'لغوية')>لغوية</option>
                    </select>
                    <input type="number" name="price" min="0" class="form-control mt-3" placeholder="السعر" value="{{ $course->price }}">
                    <textarea name="details" class="form-control mt-3" placeholder="ادخل تفاصيل الكورس" rows="5">{{ $course->details }}</textarea>
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
