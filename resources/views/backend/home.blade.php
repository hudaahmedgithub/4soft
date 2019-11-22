@extends('backend.layouts.app')

@section('content')
<div class="container">

    {{--  <img width="85" height="35" style="display: inline-block; width: 85px; height: 35px; vertical-align: top;" src=''></img>  --}}

    
    <div class="row mt-5 justify-content-center">
  
                    <div class="col-12 col-lg-6 col-xl-3">
                        <div class="widget widget-tile">
                            <div class="chart sparkline" id="services"><span style="display: inline-block; width: 85px; height: 35px; vertical-align: top;font-size:50px;" class="mdi text-danger mdi-local-mall"></span> </div>
                            <div class="data-info">
                                <div class="desc">Services</div>
                                     <div class="value"><span class="indicator indicator-equal mdi mdi-chevron-right"></span><span class="number">{{ DB::table('services')->count() }}</span>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-12 col-lg-6 col-xl-3">
                            <div class="widget widget-tile">
                                <div class="chart sparkline" id="partners"><span style="display: inline-block; width: 85px; height: 35px; vertical-align: top;font-size:50px;" class="mdi text-success mdi-accounts"></span> </div>
                                <div class="data-info">
                                    <div class="desc">Partners</div>
                                         <div class="value"><span class="indicator indicator-equal mdi mdi-chevron-right"></span><span class="number">{{ DB::table('partners')->count() }}</span>
                                    </div>
                                </div>
                            </div>
                    </div>

                    <div class="col-12 col-lg-6 col-xl-3">
                            <div class="widget widget-tile">
                                <div class="chart sparkline" id="skills"><span style="display: inline-block; width: 85px; height: 35px; vertical-align: top;font-size:50px;" class="mdi text-primary mdi-local-library"></span> </div>
                                <div class="data-info">
                                    <div class="desc">Skills</div>
                                         <div class="value"><span class="indicator indicator-equal mdi mdi-chevron-right"></span><span class="number">{{ DB::table('partners')->count() }}</span>
                                    </div>
                                </div>
                            </div>
                    </div>



                    <div class="col-12 col-lg-6 col-xl-3">
                            <div class="widget widget-tile">
                                <div class="chart sparkline" id="members"><span style="display: inline-block; width: 85px; height: 35px; vertical-align: top;font-size:50px;" class="mdi text-warning mdi-account-circle"></span> </div>
                                <div class="data-info">
                                    <div class="desc">Members</div>
                                         <div class="value"><span class="indicator indicator-equal mdi mdi-chevron-right"></span><span class="number">{{ DB::table('memebers')->count() }}</span>
                                    </div>
                                </div>
                            </div>
                    </div>


    </div>
</div>
@endsection
