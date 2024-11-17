@extends('layouts.admin')

@section('content')
<div class="container p-3">
    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                اضافة كورس
            </button>
        </div>
        <div class="card-body">
            <table class="table table-striped text-center">
                <thead>
                    <tr>
                        <th scope="col">الاسم</th>
                        <th scope="col">النوع</th>
                        <th scope="col">السعر</th>
                        <th scope="col">تاريخ الانشاء</th>
                        <th scope="col">اجراء</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($courses as $course)
                        <tr>
                            <td>{{ $course->name }}</td>
                            <td>{{ $course->type }}</td>
                            <td>{{ $course->price }}</td>
                            <td>{{ $course->created_at->format('Y-m-d') }}</td>
                            <td>
                                <a href="{{ route('course.show', $course->id) }}" class="btn btn-info">عرض</a>
                                <a href="{{ route('course.edit', $course->id) }}" class="btn btn-secondary">تعديل</a>
                                <form action="{{ route('course.destroy', $course->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button role="submit" class="btn btn-danger">حذف</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{ $courses->links() }}
        </div>
    </div>
</div>
@endsection

@section('modals')
<form action="{{ route('course.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">اضافة كورس جديد</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body rtl">
                <input type="text" name="name" placeholder="ادخل الاسم" class="form-control">
                <select name="type" class="form-control mt-3">
                    <option>اختر نوع الكورس</option>
                    <option value="ادارية">ادارية</option>
                    <option value="مهنية">مهنية</option>
                    <option value="لغوية">لغوية</option>
                </select>
                <input type="number" name="price" min="0" class="form-control mt-3" placeholder="السعر">
                <textarea name="details" class="form-control mt-3" placeholder="ادخل تفاصيل الكورس" rows="5"></textarea>
                <input type="file" name="image" class="form-control mt-3" placeholder="الصورة">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">اغلاق</button>
              <button role="submit" class="btn btn-primary">حفظ</button>
            </div>
          </div>
        </div>
    </div>
</form>
@endsection
