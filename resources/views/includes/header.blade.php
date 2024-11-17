<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid mx-2 position-relative d-flex align-items-center justify-content-between">

      <a href="{{ route('main') }}" class="logo d-flex align-items-center me-auto me-xl-0">
        <img src="{{ asset('assets/img/logos/5_20240710_151216_0004.svg') }}" alt="شركة الشرارة" width="80" height="80">
      </a>

      <nav id="navmenu" class="navmenu rtl">
        <ul>
          <li><a href="{{ Route::is('main') ? '#hero' : route('main') }}">الرئيسية</a></li>
          <li><a href="{{ Route::is('main') ? '#about' : route('main') }}">من نحن ؟</a></li>
          <li><a href="{{ Route::is('main') ? '#services' : route('main') }}">الخدمات</a></li>
          <li><a href="{{ Route::is('main') ? '#portfolio' : route('main') }}">الاخبار</a></li>
          <li><a href="{{ Route::is('main') ? '#team' : route('main') }}">الفريق</a></li>
          <li class="dropdown"><a href="#"><span>المزيد</span> <i class="bi bi-chevron-down toggle-dropdown mx-2"></i></a>
            <ul>
              <li class="dropdown"><a href="#"><span>الدورات</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">دورات مهنية</a></li>
                  <li><a href="#">دورات ادارية</a></li>
                  <li><a href="#">دورات لغوية</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#"><span>الخدمات</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">حجز قاعات</a></li>
                  <li><a href="#">خدمات تقنية</a></li>
                  <li><a href="#">استشارات</a></li>
                </ul>
              </li>
              <li><a href="#">انظم لفريقنا</a></li>
              <li><a href="{{ route('auth.login.create') }}">تسجيل الدخول</a></li>
              <li><a href="{{ Route::is('main') ? '#faq' : route('main') }}">FAQs</a></li>
            </ul>
          </li>
          <li><a href="{{ Route::is('main') ? '#contact' : route('main') }}">تواصل معنا</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <div class="header-social-links">
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="twitter"><i class="bi bi-whatsapp"></i></a>

      </div>

    </div>
  </header>
