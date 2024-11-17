@extends('layouts.defualt')

@section('content')
    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background h-100">

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center" data-aos="fade-up" data-aos-delay="100">
                        <h2><span>مرحبا في شركة </span><span class="underlight">الشرارة</span> <span>للتدريب وتطوير
                                الأعمال</span></h2>
                        <p>رحلة ثرية تساهم في تعزيز قدراتك</p>
                        <a href="#about" class="btn-get-started">ابدأ جولتك بالموقع</a>
                    </div>
                </div>
            </div>

        </section><!-- /Hero Section -->

        <!-- About Section -->
        <section id="about" class="about section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>من نحن ؟</h2>
                <p>
                    "الشرارة" هي شركة تدريب وتطوير رائدة، نؤمن بأن الاستثمار في تطوير الكفاءات البشرية هو الاستثمار الأمثل
                    في المستقبل. نحن نقدم مجموعة واسعة من البرامج التدريبية المصممة خصيصًا لتلبية احتياجات الأفراد والشركات
                    على حد سواء. فريقنا من الخبراء ذوي الكفاءة العالية ملتزم بتوفير تجربة تعليمية فريدة ومجزية، مما يساعدك
                    على تحقيق أقصى إمكاناتك.
                </p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-5">

                    <div class="content col-xl-5 d-flex flex-column" data-aos="fade-up" data-aos-delay="100">
                        <h3>الشراكة والتعاون</h3>
                        <p>
                            "الشرارة" هي بداية علاقة شراكة قوية. نحن لا نقدم لك مجرد تدريب، بل نعمل معك جنبًا إلى جنب لتحقيق
                            أهدافك. نؤمن بأن التعاون هو مفتاح النجاح، ونحن ملتزمون ببناء علاقات طويلة الأمد مع عملائنا.
                        </p>
                        <a href="{{ route('maneger_word') }}"
                            class="about-btn align-self-center align-self-xl-start"><span>كلمة مدير الشركة</span> <i
                                class="bi bi-chevron-left"></i></a>
                    </div>

                    <div class="col-xl-7" data-aos="fade-up" data-aos-delay="200">
                        <div class="row gy-4">

                            <div class="col-md-6 icon-box position-relative">
                                <i class="bi bi-bullseye"></i>
                                <h4>الرؤية والمهمة</h4>
                                <p>أن نكون الشركة الرائدة في تطوير المهارات وتمكين الأفراد والمؤسسات من تحقيق أقصى
                                    إمكاناتهم، من خلال تقديم برامج تدريبية متميزة وملهمة تسهم في بناء قدرات مستدامة وداعمة
                                    للنمو والتفوق.</p>
                            </div><!-- Icon-Box -->

                            <div class="col-md-6 icon-box position-relative">
                                <i class="bi bi-gem"></i>
                                <h4>القيم</h4>
                                <p>تسعى شركتنا للتدريب والتطوير إلى تحقيق التميز والابتكار من خلال تقديم برامج تعليمية عالية
                                    الجودة، وتعزيز ثقافة التعلم المستمر، مع الالتزام بالاحترافية والتمكين والتعاون
                                    والمسؤولية المجتمعية.</p>
                            </div><!-- Icon-Box -->

                            <div class="col-md-6 icon-box position-relative">
                                <i class="bi bi-briefcase"></i>
                                <h4>الخدمات التي نقدمها</h4>
                                <p>تتميز جودة خدمات شركتنا للتدريب والتطوير بتقديم برامج تدريبية مخصصة تتناسب مع احتياجات
                                    العملاء، حيث نستخدم أساليب تعليمية مبتكرة وفعالة، مدعومة بفريق من المدربين ذوي الخبرة
                                    والكفاءة.</p>
                            </div><!-- Icon-Box -->

                            <div class="col-md-6 icon-box position-relative">
                                <i class="bi bi-hand-thumbs-up"></i>
                                <h4>النجاحات التي حققناها</h4>
                                <p>تتميز خدمات شركة التدريب والتطوير بنجاحها من خلال تحقيق نتائج ملموسة لعملائنا، حيث نستخدم
                                    استراتيجيات مبتكرة ومخصصة تلبي احتياجات السوق، مما يسهم في تعزيز مهارات الأفراد وزيادة
                                    إنتاجية الفرق.</p>
                            </div><!-- Icon-Box -->

                        </div>
                    </div>

                </div>

            </div>

        </section><!-- /About Section -->

        <div class="text-center">
            <hr class="w-75 d-inline-block">
        </div>

        <!-- Clients Section -->
        <section id="clients" class="clients section bg-white">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>شركاؤنا</h2>
                <p>
                    شركاؤنا هم ركيزة أساسية في رحلتنا نحو التميز. نتعاون مع نخبة من الشركات والمؤسسات الرائدة في مختلف
                    المجالات، لنوفر لك أفضل الحلول التدريبية والتنموية. هذه الشراكة الاستراتيجية تمكننا من تقديم تجربة
                    تعليمية متكاملة تلبي احتياجاتك المتطورة
                </p>
            </div><!-- End Section Title -->

            <div class="container-fluid px-5">

                <div class="swiper init-swiper">
                    <script type="application/json" class="swiper-config">
                {
                "loop": true,
                "speed": 600,
                "autoplay": {
                    "delay": 5000
                },
                "slidesPerView": "auto",
                "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                },
                "breakpoints": {
                    "320": {
                    "slidesPerView": 2,
                    "spaceBetween": 40
                    },
                    "480": {
                    "slidesPerView": 2,
                    "spaceBetween": 60
                    },
                    "640": {
                    "slidesPerView": 4,
                    "spaceBetween": 80
                    },
                    "992": {
                    "slidesPerView": 3,
                    "spaceBetween": 120
                    }
                }
                }
            </script>
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><img src="{{ asset('assets/img/clients/download2.jpeg') }}"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('assets/img/clients/download.jpeg') }}"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('assets/img/clients/download.png') }}"
                                class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="{{ asset('assets/img/clients/images.jpeg') }}" class="img-fluid"
                                alt=""></div>
                    </div>
                </div>

            </div>

        </section><!-- /Clients Section -->

        <div class="text-center">
            <hr class="w-75 d-inline-block">
        </div>

        <!-- Services Section -->
        <section id="services" class="services section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>الخدمات</h2>
                <p>
                    نقدم لك في "الشرارة" باقة متكاملة من الحلول التدريبية المصممة خصيصًا لتلبية احتياجاتك الفريدة. سواء كنت
                    تبحث عن تطوير مهاراتك القيادية، أو تحسين أدائك في العمل، أو اكتساب مهارات جديدة، فإننا نوفر لك مجموعة
                    واسعة من البرامج التدريبية التي تلبي تطلعاتك
                </p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon flex-shrink-0"><i class="bi bi-gear"></i></div>
                        <div>
                            <h4 class="title">برامج التدريب المهني</h4>
                            <p class="description">
                                نقدم مجموعة متنوعة من برامج التدريب المهني والحرفي المصممة لتزويدك بالمهارات العملية التي
                                تحتاجها للانطلاق في سوق العمل. من خلال تدريبنا المكثف والعملي، ستكتسب الخبرة والمعرفة
                                اللازمتين للنجاح في مجال عملك.
                            </p>
                            <a href="{{ route('vocational_training') }}" class="readmore stretched-link"><span>معرفة
                                    المزيد</span><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon flex-shrink-0"><i class="bi bi-briefcase"></i></div>
                        <div>
                            <h4 class="title">برامج التدريب الاداري</h4>
                            <p class="description">
                                نقدم برامج تدريبية إدارية متخصصة تساهم في تطوير مهاراتك القيادية بشكل شامل. ستتعلم كيفية
                                تحفيز فريقك، اتخاذ القرارات الصعبة، بناء علاقات قوية، والوصول إلى أهدافك التنظيمية بفعالية.
                            </p>
                            <a href="{{ route('administrative_training') }}" class="readmore stretched-link"><span>معرفة
                                    المزيد</span><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon flex-shrink-0"><i class="bi bi-building"></i></div>
                        <div>
                            <h4 class="title">برامج التدريب المؤسسي</h4>
                            <p class="description">
                                نقدم برامج تدريب مؤسسية شاملة مصممة خصيصًا لتلبية احتياجات شركتك. نعمل معك جنبًا إلى جنب
                                لتحديد احتياجاتك التدريبية، ثم نصمم وننفذ برامج مخصصة تساهم في تطوير أداء موظفيك وتحقيق
                                أهداف شركتك الاستراتيجية. برامجنا تغطي مجموعة واسعة من المجالات، بما في ذلك القيادة،
                                الإدارة، المبيعات، خدمة العملاء، والتطوير المهني.
                            </p>
                            <a href="{{ route('corporate_training') }}" class="readmore stretched-link"><span>معرفة
                                    المزيد</span><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="400">
                        <div class="icon flex-shrink-0"><i class="bi bi-code-slash"></i></div>
                        <div>
                            <h4 class="title">الخدمات و الاستشارات التقنية</h4>
                            <p class="description">
                                نقدم حلولاً تقنية مبتكرة ومخصصة لتلبية احتياجات أعمالك. فريقنا من الخبراء يسعى باستمرار
                                لتبني أحدث التقنيات والابتكارات لتقديم حلول فعالة تساهم في نمو أعمالك وتطويرها.
                            </p>
                            <a href="{{ route('it') }}" class="readmore stretched-link"><span>معرفة المزيد</span><i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="500">
                        <div class="icon flex-shrink-0"><i class="bi bi-calendar-event"></i></div>
                        <div>
                            <h4 class="title">استضافة الاحداث</h4>
                            <p class="description">
                                نقدم لك خدمة استضافة أحداث متكاملة، حيث نتحمل مسؤولية التخطيط والتنفيذ بكل تفاصيله. بدءًا من
                                اختيار المكان المناسب وحتى إدارة الضيوف وتوفير كافة الخدمات اللوجستية، نحن شركاؤك في تحقيق
                                حدث ناجح لا يُنسى.
                            </p>
                            <a href="{{ route('hosting_events') }}" class="readmore stretched-link"><span>معرفة
                                    المزيد</span><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="600">
                        <div class="icon flex-shrink-0"><i class="bi bi-brightness-high"></i></div>
                        <div>
                            <h4 class="title">خدمات السفر و السياحة</h4>
                            <p class="description">
                                نقدم لك تجربة سفر فريدة وشاملة، حيث نوفر لك كل ما تحتاجه لرحلتك المثالية. بدءًا من حجز تذاكر
                                الطيران والفنادق، وصولًا إلى تنظيم الجولات السياحية وتأجير السيارات، نحن شريكك الأمثل في
                                استكشاف العالم.
                            </p>
                            <a href="{{ route('tourism') }}" class="readmore stretched-link"><span>معرفة المزيد</span><i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div><!-- End Service Item -->

                </div>

            </div>

        </section><!-- /Services Section -->

        <div class="text-center">
            <hr class="w-75 d-inline-block">
        </div>

        <!-- Call To Action Section -->
        <section id="call-to-action" class="call-to-action section dark-background">

            <div class="container">
                <img src="assets/img/cta-bg.jpg" alt="">
                <div class="content row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                    <div class="col-xl-10">
                        <div class="text-center">
                            <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8"
                                class="glightbox pulsating-play-btn"></a>
                            <h3>الشرارة التي تشعل طموحاتك وتضيء طريق نجاحك</h3>
                            <p>
                                في "الشرارة"، نؤمن بأن كل فرد يحمل في داخله إمكانات هائلة. نحن هنا لنشعل هذه الإمكانات
                                ونحولها إلى واقع ملموس. مع برامجنا التدريبية المبتكرة، سنقودك إلى تحقيق أقصى استفادة من
                                قدراتك.
                            </p>
                            <a class="cta-btn" href="#contact">تواصل معنا</a>
                        </div>
                    </div>
                </div>
            </div>

        </section><!-- /Call To Action Section -->

        <div class="text-center">
            <hr class="w-75 d-inline-block">
        </div>

        <!-- Portfolio Section -->
        <section id="portfolio" class="portfolio section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>الاخبار</h2>
                <p>
                    استكشف عالم التطوير معنا! تابع أحدث أخبارنا لتعرف كل ما هو جديد في عالم التدريب. سنشاركك قصص نجاح
                    متدربينا، أحدث دوراتنا، وفعالياتنا المستمرة التي تساهم في تطوير مهاراتك.
                </p>
            </div><!-- End Section Title -->

            <div class="container">
                @livewire('news-loader')
            </div>

        </section><!-- /Portfolio Section -->

        <div class="text-center">
            <hr class="w-75 d-inline-block">
        </div>

        <!-- Team Section -->
        <section id="team" class="team section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>الفريق</h2>
                <p>التقِ بفريقنا المتخصص! نحن مجموعة من الخبراء الذين يعملون جاهدين لتحقيق أهداف الشركة. كل عضو في فريقنا
                    يساهم بمعرفته وخبرته في مجالاته كالادارة و المحاسبة و الهندسة و الكثير.</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="team-member d-flex align-items-start">
                            <div class="pic"><img src="{{ asset('assets/img/team/manger.jpg') }}" class="img-fluid"
                                    alt=""></div>
                            <div class="member-info">
                                <h4>محمد علي الهادي</h4>
                                <span>المدير العام</span>
                                <p>قائد متميز بخبرة تطويرية واسعة</p>
                                <div class="social">
                                    <a href=""><i class="bi bi-whatsapp"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Team Member -->

                </div>

            </div>

        </section><!-- /Team Section -->

        <div class="text-center">
            <hr class="w-75 d-inline-block">
        </div>

        <!-- Pricing Section -->
        <section id="pricing" class="pricing section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>الدورات التدريبية</h2>
                <p>
                    استثمر في نفسك واكتشف إمكاناتك الكامنة! نقدم لك مجموعة متنوعة من الدورات التدريبية المخصصة لتطوير
                    مهاراتك وقدراتك في مختلف المجالات. سواء كنت تبحث عن تطوير مهاراتك المهنية أو اكتساب مهارات جديدة، لدينا
                    الدورة المناسبة لك.
                </p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100">
                        <div class="pricing-item">
                            <h3>الدورات الادارية</h3>
                            <h4><span>تبدأ من /</span> 350<sup>.دل</sup></h4>
                            <ul>
                                <li><i class="bi bi-check"></i> <span>برامج مخصصة لتطوير القيادات</span></li>
                                <li><i class="bi bi-check"></i> <span>مدربون محترفون بخبرة إدارية</span></li>
                                <li><i class="bi bi-check"></i> <span>تركيز على المهارات القيادية</span></li>
                                <li><i class="bi bi-check"></i> <span>مرونة في أوقات التدريب</span></li>
                                <li><i class="bi bi-check"></i> <span>شهادات معتمدة</span></li>
                            </ul>
                            <a href="{{ route('course.administrative') }}" class="buy-btn">سجل الان</a>
                        </div>
                    </div><!-- End Pricing Item -->

                    <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
                        <div class="pricing-item featured">
                            <h3>الدورات المهنية</h3>
                            <h4><span>تبدأ من /</span> 250<sup>.دل</sup></h4>
                            <ul>
                                <li><i class="bi bi-check"></i> <span>برامج مواكبة لاحتياجات السوق</span></li>
                                <li><i class="bi bi-check"></i> <span>مدربون بخبرة عالية</span></li>
                                <li><i class="bi bi-check"></i> <span>تركيز على التدريب العملي</span></li>
                                <li><i class="bi bi-check"></i> <span>مرونة في الأوقات والمواقع</span></li>
                                <li><i class="bi bi-check"></i> <span>شهادات معتمدة</span></li>
                            </ul>
                            <a href="{{ route('course.vocational') }}" class="buy-btn">سجل الان</a>
                        </div>
                    </div><!-- End Pricing Item -->

                    <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="300">
                        <div class="pricing-item">
                            <h3>الدورات اللغوية</h3>
                            <h4><span>تبدأ من /</span> 400<sup>.دل</sup></h4>
                            <ul>
                                <li><i class="bi bi-check"></i> <span>مناهج حديثة تواكب الاحتياجات</span></li>
                                <li><i class="bi bi-check"></i> <span>مدربون محترفون ومتخصصون</span></li>
                                <li><i class="bi bi-check"></i> <span>تركيز على المحادثة والتطبيق</span></li>
                                <li><i class="bi bi-check"></i> <span>مرونة في الجداول والمواقع</span></li>
                                <li><i class="bi bi-check"></i> <span>شهادات معتمدة</span></li>
                            </ul>
                            <a href="{{ route('course.english') }}" class="buy-btn">سجل الان</a>
                        </div>
                    </div><!-- End Pricing Item -->

                </div>

            </div>

        </section><!-- /Pricing Section -->

        <div class="text-center">
            <hr class="w-75 d-inline-block">
        </div>

        <!-- Faq Section -->
        <section id="faq" class="faq section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>الاسئلة الشائعة</h2>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row">

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

                        <div class="faq-container">

                            <div class="faq-item">
                                <h3>ما هي مجالات التدريب التي تقدمها الشركة؟</h3>
                                <div class="faq-content">
                                    <p>نقدم مجموعة متنوعة من مجالات التدريب، بما في ذلك التدريب الفني والمهني، تطوير المهارات القيادية، دورات اللغات، وتنمية الموارد البشرية.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>كيف يمكنني التسجيل في الدورات المتاحة؟</h3>
                                <div class="faq-content">
                                    <p>يمكنك التسجيل بسهولة عبر موقعنا الإلكتروني من خلال اختيار الدورة المطلوبة وملء استمارة التسجيل، أو يمكنك الاتصال بفريق الدعم لمساعدتك.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>هل هناك شهادات معتمدة بعد إتمام الدورة؟</h3>
                                <div class="faq-content">
                                    <p>نعم، يحصل المتدربون على شهادات معتمدة بعد إتمام الدورة بنجاح، مما يعزز فرصهم في سوق العمل.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                        </div>

                    </div><!-- End Faq Column-->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">

                        <div class="faq-container">

                            <div class="faq-item">
                                <h3>هل توفر الشركة دورات تدريبية عن بُعد؟</h3>
                                <div class="faq-content">
                                    <p>نعم، نقدم دورات تدريبية عن بُعد باستخدام منصات تعليمية متقدمة، مما يتيح للمتدربين التعلم من أي مكان.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>ما هي طرق الدفع المتاحة للتسجيل في الدورات؟</h3>
                                <div class="faq-content">
                                    <p>Moleنقبل عدة طرق للدفع، بما في ذلك التحويل المصرفي، بطاقات الائتمان، والدفع نقدًا في مقر الشركة.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                            <div class="faq-item">
                                <h3>هل يمكنني استرداد الرسوم في حال إلغاء التسجيل؟</h3>
                                <div class="faq-content">
                                    <p>نعم، نقدم سياسة استرداد مرنة، حيث يمكن للمتدربين استرداد الرسوم في حال إلغاء التسجيل قبل بدء الدورة بمدة معينة.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div><!-- End Faq item-->

                        </div>

                    </div><!-- End Faq Column-->

                </div>

            </div>

        </section><!-- /Faq Section -->

        <div class="text-center">
            <hr class="w-75 d-inline-block">
        </div>

        <!-- Contact Section -->
        <section id="contact" class="contact section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>تواصل معنا</h2>
                <p>لا تترد فالتواصل معنا، او ارسال رسالة الينا، نحن في انتظاركم!</p>
            </div><!-- End Section Title -->

            <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-5">
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h3>عنوان الشركة</h3>
                                <p class="text-decoration-underline">
                                    <a href="https://maps.app.goo.gl/t4aXYniLqspukAe9A">Libya - Sebha - Trepoli Rode</a>
                                </p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-telephone flex-shrink-0"></i>
                            <div>
                                <h3>اتصل بنا</h3>
                                <p class="text-decoration-underline">
                                    <a href="https://wa.me/218915143939">091-5143939</a>
                                </p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h3>راسلنا على البريد</h3>
                                <p class="text-decoration-underline">
                                    <a href="mailto:info@alshararahcenter.ly">info@alshararahcenter.ly</a>
                                </p>
                            </div>
                        </div><!-- End Info Item -->

                    </div>

                    <div class="col-lg-7">
                        @livewire('message-form')
                    </div><!-- End Contact Form -->

                </div>

            </div>

        </section><!-- /Contact Section -->

    </main>
@endsection
