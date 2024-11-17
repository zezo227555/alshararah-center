@extends('layouts.admin')

@section('content')
<div class="container p-3">
    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                اضافة مستخدم
            </button>
        </div>
        <div class="card-body">
            <table class="table table-striped text-center">
                <thead>
                  <tr>
                    <th scope="col">الاسم</th>
                    <th scope="col">البريد</th>
                    <th>تاريخ التسجيل</th>
                    <th scope="col">اجراء</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->created_at->format('Y-m-d') }}</td>
                            <td>
                                <a href="{{ route('user.edit', $user->id) }}" class="btn btn-secondary">تعديل</a>
                                <form action="{{ route('user.destroy', $user->id) }}" method="POST" class="d-inline">
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
            {{ $users->links() }}
        </div>
    </div>
</div>
@endsection

@section('modals')
<form action="{{ route('user.store') }}" method="POST">
    @csrf
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">اضافة مستخدم</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body rtl">
              <input type="text" name="name" placeholder="ادخل الاسم" class="form-control">
              <input type="text" name="email" placeholder="ادخل البريد" class="form-control mt-2">
              <input type="text" name="password" placeholder="ادخل كلمة المرور" class="form-control mt-2">
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
