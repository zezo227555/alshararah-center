<nav class="navbar navbar-expand-lg navbar-light bg-light rtl">
    <div class="collapse navbar-collapse px-2" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link" href="{{ route('dashboard') }}">الرئيسية</a>
        <a class="nav-item nav-link" href="{{ route('user.index') }}">المستخدمين</a>
        <a class="nav-item nav-link" href="{{ route('news.index') }}">الاخبار</a>
        <a class="nav-item nav-link" href="{{ route('course.index') }}">الكورسات</a>
      </div>
    </div>
    <form action="{{ route('logout') }}" class="d-inline" method="POST">
        @csrf
        <button role="submit" class="nav-item nav-link">تسجيل الخروج</button>
    </form>
    <a class="navbar-brand float-start" href="#"><img src="{{ asset('assets/img/logos/3_20240710_151216_0002.svg') }}" alt="Logo" width="60" height="60"></a>
</nav>
