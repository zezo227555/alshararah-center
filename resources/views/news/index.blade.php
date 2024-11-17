@extends('layouts.admin')

@section('content')
<div class="container p-3">
    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                اضافة خبر
            </button>
        </div>
        <div class="card-body">
            <table class="table table-striped text-center">
                <thead>
                    <tr>
                        <th scope="col">العنوان</th>
                        <th scope="col">تاريخ الانشاء</th>
                        <th scope="col">اجراء</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($news as $new)
                        <tr>
                            <td>{{ $new->title }}</td>
                            <td>{{ $new->created_at->format('Y-m-d') }}</td>
                            <td>
                                <a href="{{ route('news.show', $new->id) }}" class="btn btn-info">عرض</a>
                                <a href="{{ route('news.edit', $new->id) }}" class="btn btn-secondary">تعديل</a>
                                <form action="{{ route('news.destroy', $new->id) }}" method="POST" class="d-inline">
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
            {{ $news->links() }}
        </div>
    </div>
</div>
@endsection

@section('modals')
<form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">اضافة خبر جديد</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body rtl">
                <input type="text" name="title" placeholder="ادخل العنوان" class="form-control">
                <textarea name="details" class="form-control mt-3" placeholder="ادخل تفاصيل الخبر" cols="20"></textarea>
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
