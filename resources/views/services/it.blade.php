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
            <h3>الخدمات و الاستشارات التقنية</h3>
            <p>
                تقدم شركتنا مجموعة شاملة من خدمات واستشارات التقنية التي تهدف إلى تعزيز الكفاءة التكنولوجية وتحسين الأداء الرقمي للمنظمات. تشمل خدماتنا ما يلي:
            </p>
            <ul>
              <li><i class="bi bi-check-circle mx-3"></i><span>تقييم الاحتياجات التقنية</span></li>
              <li><i class="bi bi-check-circle mx-3"></i><span>خدمات تطوير البرمجيات</span></li>
              <li><i class="bi bi-check-circle mx-3"></i><span>التدريب التقني</span></li>
              <li><i class="bi bi-check-circle mx-3"></i><span>الاستشارات في مجال تكنولوجيا المعلومات</span></li>
            </ul>
            <p>
                بهذا الشكل، تقدم خدمات واستشارات التقنية تجربة شاملة تساعد المؤسسات على تحسين أدائها التكنولوجي وتحقيق أهدافها التجارية.            </p>
            <p>
          </div>

          <div class="col-lg-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
            <div class="services-list">
                <a href="{{ route('vocational_training') }}">برامج التدريب المهني</a>
                <a href="{{ route('administrative_training') }}">برامج التدريب الاداري</a>
                <a href="{{ route('corporate_training') }}">برامج التدريب المؤسسي</a>
                <a href="{{ route('it') }}" class="active">الخدمات و الاستشارات التقنية</a>
                <a href="{{ route('hosting_events') }}">استضافة الاحداث</a>
                <a href="{{ route('tourism') }}">خدمات السفر و السياحة</a>
            </div>

        </div>

        </div>

      </div>

    </section><!-- /Service Details Section -->

</main>
@endsection
