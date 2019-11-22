<section class="ftco-section services-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <h2 class="mb-4"> {{ __('landing.why-choose-us.heading') }} </h2>
                <p>{{ __('landing.why-choose-us.description') }}</p>
            </div>
        </div>
        <div class="row justify-content-center">

            @php $i = 0; @endphp

            @foreach($services->where('type', 'choose_us') as $service)

                <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-flex align-items-center">
                        <div class="icon d-flex align-items-center justify-content-center {{ (($i % 2) == 0) ? 'order-md-last' : '' }}">
                            <span class="{{ $service->image }}"></span>
                        </div>
                        <div class="media-body pl-4 pl-md-0 pr-md-4 text-md-right">
                            <h3 class="heading">{{ $service->name }}</h3>
                            @php $descripition='description'; @endphp
                            <p class="mb-0">{{ $service->description }}</p>
                        </div>
                    </div>
                </div>

                @php $i++ @endphp

            @endforeach

        </div>
    </div>
</section>
