@extends('layouts.defualt')

@section('content')
<main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background aos-init aos-animate" data-aos="fade">
      <div class="container position-relative">
        <h1>الخدمات</h1>
        <p>توسعت باقة خدماتنا لتشمل حلولاً متكاملة في التدريب، التقنية، والسياحة، مما يتيح لكم تجربة متميزة تلبي جميع احتياجاتكم في مكان واحد.</p>
        {{-- <nav class="breadcrumbs">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Service Details</li>
          </ol>
        </nav> --}}
      </div>
    </div><!-- End Page Title -->

    <!-- Service Details Section -->
    <section id="service-details" class="service-details section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
            <img src="assets/img/services.jpg" alt="" class="img-fluid services-img">
            <h3>خدمات السفر و السياحة</h3>
            <p>
                تقدم شركتنا مجموعة متكاملة من خدمات السفر والسياحة التي تهدف إلى تلبية احتياجات المسافرين وتوفير تجارب سفر فريدة وممتعة. تشمل خدماتنا ما يلي:            </p>
            <ul>
              <li><i class="bi bi-check-circle mx-3"></i><span>تخطيط الرحلات المخصصة</span></li>
              <li><i class="bi bi-check-circle mx-3"></i><span>حجز تذاكر الطيران</span></li>
              <li><i class="bi bi-check-circle mx-3"></i><span>تنظيم الجولات السياحية</span></li>
              <li><i class="bi bi-check-circle mx-3"></i><span>تأمين السفر</span></li>
              <li><i class="bi bi-check-circle mx-3"></i><span>استشارات السفر</span></li>
            </ul>
            <p>
                بهذا الشكل، تضمن خدمات السفر والسياحة توفير تجربة شاملة للمسافرين، مما يسهل عليهم استكشاف العالم والاستمتاع برحلاتهم.
            </p>
          </div>

          <div class="col-lg-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
            <div class="services-list">
                <a href="{{ route('vocational_training') }}">برامج التدريب المهني</a>
                <a href="{{ route('administrative_training') }}">برامج التدريب الاداري</a>
                <a href="{{ route('corporate_training') }}">برامج التدريب المؤسسي</a>
                <a href="{{ route('it') }}">الخدمات و الاستشارات التقنية</a>
                <a href="{{ route('hosting_events') }}">استضافة الاحداث</a>
                <a href="{{ route('tourism') }}" class="active">خدمات السفر و السياحة</a>
            </div>

        </div>

        </div>

      </div>

    </section><!-- /Service Details Section -->

</main>
@endsection
