@extends('layouts.defualt')

@section('content')
<main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background aos-init aos-animate" data-aos="fade">
      <div class="container position-relative">
        <h1>كلمة مدير الشركة</h1>
        <p>Esse dolorum voluptatum ullam est sint nemo et est ipsa porro placeat quibusdam quia assumenda numquam molestias.</p>
        {{-- <nav class="breadcrumbs">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Portfolio Details</li>
          </ol>
        </nav> --}}
      </div>
    </div><!-- End Page Title -->

    <!-- Portfolio Details Section -->
    <section id="portfolio-details" class="portfolio-details section rtl">

      <div class="container aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="portfolio-info aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
              <h3>معلومات</h3>
              <ul>
                <li><strong>الاسم:</strong> محمد علي الهادي</li>
                <li><strong>المؤهل:</strong> هندسة</li>
                <li><strong>سنوات الخبر:</strong> 20</li>
              </ul>
            </div>
            <div class="portfolio-description aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
              <h2>رؤيتنا للتطوير المستدام في عالم التدريب</h2>
              <p style="text-align: justify;">أهلاً بكم في موقع شركة الشرارة للتدريب و التطوير، حيث نتطلع دوماً إلى الريادة في تقديم خدمات التدريب والتطوير التي تلبي طموحات الأفراد وتساهم في تعزيز القدرات والمهارات على مستوى الأفراد والمؤسسات. نؤمن في شركة الشرارة بأن الاستثمار في الموارد البشرية هو أساس النجاح والتفوق المستدام. لذا، نسعى لتقديم برامج تدريبية متكاملة وحديثة، مصممة خصيصاً لتلبية احتياجات سوق العمل ومتطلبات العملاء.</p>
              <p style="text-align: justify;">تجمع برامجنا بين المعرفة العميقة والخبرة العملية، ويشرف على تنفيذها نخبة من المتخصصين ذوي الكفاءة العالية والخبرة الواسعة. هدفنا هو تمكين الأفراد من اكتساب المهارات التي تؤهلهم للنجاح في مساراتهم المهنية، ودعم الشركات لتحقيق أقصى إمكانياتها من خلال تطوير كفاءات موظفيها.</p>
              <p style="text-align: justify;">نحن ملتزمون في شركة الشرارة بالتميز والابتكار، ونؤمن بأن رحلتنا لا تكتمل إلا بمساهمتكم وآرائكم. شكراً لثقتكم بنا، ونتطلع دائماً إلى التعاون المثمر والمستقبل الواعد.</p>
            </div>
          </div>

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper init-swiper swiper-initialized swiper-horizontal swiper-rtl swiper-backface-hidden">
                <div class="swiper-slide">
                  <img src="{{ asset('assets/img/team/manger.jpg') }}" alt="maneger-word">
                </div>
            </div>
          </div>

        </div>
      </div>

    </section><!-- /Portfolio Details Section -->

  </main>
@endsection
