<style>
    .they-says *{
        direction: ltr;
    }
</style>

<section class="ftco-section they-says testimony-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <span class="subheading"> {{ __('home.customer-says') }} </span>
                <h2 class="mb-4">{{ __('landing.our-customer-says.heading') }}</h2>
                <p>{{ __('landing.our-customer-says.description') }}</p>
            </div>
        </div>
        <div class="row ftco-animate">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel ftco-owl">
                    <?php
                        /**
                        * Fetch Customers
                        */

                        $customers = DB::table('customers')->select('*')->get();

                    ?>

                    @foreach ($customers as $customer)
                        <div class="item">
                                <div class="testimony-wrap p-4 text-center">
                                    <div class="user-img mb-4" style="background-image: url({{ Storage::url($customer->image) }})">
                                        <span class="quote d-flex align-items-center justify-content-center">
                                            <i class="icon-quote-left"></i>
                                        </span>
                                    </div>
                                    <div class="text">
                                        <p class="mb-4">{{ $customer->comment }}</p>
                                        <p class="name">{{ $customer->name }}</p>
                                        <span class="position">{{ $customer->job }}</span>
                                    </div>
                                </div>
                        </div>
                    @endforeach



                </div>
            </div>
        </div>
    </div>
</section>
