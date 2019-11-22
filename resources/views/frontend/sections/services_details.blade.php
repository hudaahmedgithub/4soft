<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <span class="subheading"> {{ __('landing.how-our-service-works.description') }} </span>
                <h2 class="mb-4">{{ __('landing.how-our-service-works.heading') }}</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 nav-link-wrap mb-5 pb-md-5 pb-sm-1 ftco-animate">
                <div class="nav ftco-animate nav-pills justify-content-center text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                    @php $j = 0; @endphp

                    @foreach($services->where('type', 'service_details') as $service)

                        <a class="nav-link {{ ($j == 0) ? 'active' : $j }}"
                                id="{{ str_replace(' ', '', $service->name) }}-tab"
                                data-toggle="pill"
                                href="#{{ str_replace(' ', '', $service->name) }}" role="tab"
                                aria-controls="{{ str_replace(' ', '', $service->name) }}"
                                aria-selected="@if($j == 0) true @else false @endif">

                            {{ $service->name }}

                        </a>

                        @php $j++ @endphp

                    @endforeach
                </div>
            </div>
            <div class="col-md-12 align-items-center ftco-animate">

                <div class="tab-content ftco-animate" id="v-pills-tabContent">

                    @php $j = 0; @endphp
                    @foreach($services->where('type', 'service_details') as $service)


                        <div class="tab-pane fade @if($j == 0) show active @endif"
                            id="{{ str_replace(' ', '', $service->name) }}" role="tabpanel"
                            aria-labelledby="{{ str_replace(' ', '', $service->name) }}-tab">

                            <div class="d-md-flex">
                                <div class="one-forth align-self-center @if(($j % 2) != 0) order-last @endif">
                                    <img src="{{ Storage::url($service->image) }}" class="img-fluid" alt="{{ $service->name }}">
                                </div>
                                <div class="one-half align-self-center @if(($j % 2) != 0) order-first mr-md-5 @else ml-md-5 @endif">
                                    <h2 class="mb-4">
                                        {{ $service->name }}
                                    </h2>
                                    <p>{{ nl2br($service->description) }}</p>
                                    <p><a href="#" class="btn btn-primary py-3">Get in touch</a></p>
                                </div>
                            </div>

                        </div>
                        @php $j++ @endphp
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>
