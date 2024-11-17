<div>
    <div class="row isotope-container">
        @foreach ($news as $new)
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app my-2">
                <div class="portfolio-content h-100">
                    <a href="{{ asset('assets/img/news') }}/{{ $new->image }}" data-gallery="portfolio-gallery-app" class="glightbox"><img src="{{ asset('assets/img/news') }}/{{ $new->image }}" class="img-fluid" alt="news"></a>
                    <div class="portfolio-info">
                    <h4><a href="portfolio-details.html" title="More Details">{{ $new->title }} {{ $new->id }}</a></h4>
                    <p>قراءة المزيد</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>


        <div class="container text-center mt-3">
            @if ($page > 1)
                <button wire:click='loadLess' class="btn btn-primary mx-1 w-25" style="background-color: #a1a1a1; border: 0px;">السابق</button>
            @endif
            @if ($news->hasMorePages())
                <button wire:click='loadMore' class="btn btn-primary mx-1 w-25" style="background-color: #07467c; border: 0px;">التالي</button>
            @endif
        </div>
</div>
