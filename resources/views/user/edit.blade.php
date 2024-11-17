@extends('layouts.admin')

@section('content')
<div class="container mt-3">
    <form action="{{ route('user.update', $user->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="card">
            <div class="card-header">
                <h4>تعديل بيانات المستخدم</h4>
            </div>
            <div class="card-body">
                <input type="text" name="name" value="{{ $user->name }}" placeholder="ادخل الاسم" class="form-control">
                <input type="text" name="email" value="{{ $user->email }}" placeholder="ادخل البريد" class="form-control mt-2">
                <input type="text" name="password" placeholder="ادخل كلمة المرور" class="form-control mt-2">
            </div>
            <div class="card-footer">
                <button role="submit" class="btn btn-primary">حفظ</button>
            </div>
        </div>
    </form>
</div>
@endsection
