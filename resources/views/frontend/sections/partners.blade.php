<section class="ftco-section ftco-partner" style="max-height: 260px;padding-top: 40px;">
    <div class="container">
        <div class="row" style="max-height: 65px !important;">

            <?php
                /**
                * Fetch Partners
                */
                $partners = DB::table('partners')->select('*')->get();
            ?>

            @foreach ($partners as $partner)

            <div class="col-sm ftco-animate">
                <a href="{{ $partner->url }}" target="_blanck" class="partner"><img src="{{ Storage::url($partner->image) }}" class="img-fluid" data-toggle="tooltip" data-placement="top" title="{{ $partner->description }}" alt="{{ $partner->name }}"></a>
            </div>

            @endforeach

        </div>
    </div>
</section>
