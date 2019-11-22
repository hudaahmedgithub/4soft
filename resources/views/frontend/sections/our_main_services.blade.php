<section class="ftco-section ftco-no-pt ftc-no-pb">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 py-5">
                <img src="images/undraw_podcast_q6p7.svg" class="img-fluid" alt="">
                <div class="heading-section ftco-animate mt-5 {{ $text_align }}">
                    <h2 class="mb-4">{{ __('landing.our-main-services.heading') }}</h2>
                    <p>{{ __('landing.our-main-services.description') }}</p>
                </div>
            </div>
            <div class="col-lg-6 py-5">
                <div class="row justify-content-center">

                    @php $i = 0; @endphp

                    @foreach($services->where('type', 'main_service') as $service)

                    <div class="col-md-6 ftco-animate">
                            <div class="media block-6 services border text-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="{{ $service->icon }}"></span>
                                </div>
                                <div class="mt-3 media-body media-body-2">
                                    <h3 class="heading">{{ $service->name }}</h3>
                                    <p>{{ $service->description }}</p>
                                </div>
                            </div>
                        </div>

                        @php $i++ @endphp

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
