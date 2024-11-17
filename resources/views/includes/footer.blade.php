<footer id="footer" class="footer dark-background">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-lg-6">
            <h4>انظم الينا</h4>
            <p>اشترك معنا في نشرة الاخبار حتى تكون على اطلاع بكل ماهو جديد من تدريبات !</p>
            <form action="forms/newsletter.php" method="post" class="php-email-form">
              <div class="newsletter-form">
                <label for="email" hidden>email</label>
                <input type="email" name="email"><input type="submit" value="اشتراك">
              </div>
              <div class="loading">يرجى الانتظار...</div>
              <div class="error-message"></div>
              <div class="sent-message">تم ارسال طلبك بنجاح، شكرا لك !</div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="d-flex align-items-center">
            <span class="sitename">Alshararah Centre</span>
          </a>
          <div class="footer-contact pt-3">
            <p>Libya - Sebha - Trepoli Rode</p>
            <p class="mt-3"><strong>الهاتف:</strong> <span>091-5143939</span></p>
            <p><strong>البريد:</strong> <span>info@alshararahcenter.ly</span></p>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>روابط</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="{{ Route::is('main') ? '#hero' : route('main') }}">الرئيسية</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="{{ Route::is('main') ? '#about' : route('main') }}">من نحن؟</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="{{ Route::is('main') ? '#services' : route('main') }}">الخدمات</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="{{ Route::is('main') ? '#contact' : route('main') }}">تواصل معنا</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>الخدمات</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">الدورات المهنية</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">الدورات الادارية</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">الدورات التقنية</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12">
          <h4>تابعنا على مواقع التواصل الاجتماعي</h4>
          <p>لتبقى على اتصال دائم و متابعة كل ماهو جديد في عالم التدريب</p>
          <div class="social-links d-flex">
            <a href=""><i class="bi bi-whatsapp"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Alshararah Center</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer>
