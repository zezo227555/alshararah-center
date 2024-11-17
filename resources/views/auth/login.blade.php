@extends('layouts.auth')

@section('content')
    <section id="contact" class="contact section">

        <!-- Section Title -->
        <div class="container section-title aos-init aos-animate" data-aos="fade-up">
            <h2>تسجيل الدخول</h2>
        </div><!-- End Section Title -->

        <div class="container position-relative aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

            <div class="col-lg-5">
                <div class="container">
                    <img src="{{ asset('assets/img/logos/1_20240710_151215_0000.svg') }}" alt="Logo" width="250" height="250">
                </div>
            </div>

            <div class="col-lg-7 pt-5">
                <form action="{{ route('login') }}" method="post" class="php-email-form aos-init aos-animate" data-aos="fade-up" data-aos-delay="500">
                    @csrf
                    <div class="row gy-4">

                    <div class="col-md-12 ">
                        <input name="email" type="email" class="form-control" placeholder="بريدك الالكتروني" required="">
                    </div>

                    <div class="col-md-12">
                        <input name="password" type="password" class="form-control" placeholder="كلمة المرور" required="">
                    </div>

                    <div class="col-md-12 text-center">
                        @if ($errors->any())
                            <div class="alert alert-danger">خطأ في بيانات تسجيل الدخول</div>
                        @endif
                        <button type="submit">تسجيل الدخول</button>
                    </div>

                </div>
                </form>
            </div><!-- End Contact Form -->

            </div>

        </div>

    </section>
@endsection
