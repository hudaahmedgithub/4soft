<!-- Resume Section start -->
<section id="resume" class="scroll-section ">
  <section id="skill" class="root-sec white skill-wrap">
    <div class="sec-overlay">
      <div class="container">
        <div class="row">
          <div class="clearfix skill-inner">
            <div class="col-sm-12 col-md-3">
              <div class="skill-left">
                <h2 class="title">Skills</h2>
                <p class="regular-text" style="color: #727272">Man behind the gun, any sophisticated weapons. Human remains that taking the role. We are experienced in utilizing all resources.</p>
              </div>
            </div>

            <!-- skills container -->
            <div class="col-sm-12 col-md-6 col-md-offset-1">
              <div class="skill-right">
                <div id="skillSlider" class="clearfix skill-graph">

                  @if ($skills->count() > 0)
                    @foreach($skills as $skill)
                      <!-- single skill -->
                      <div class="single-skill">
                        <div class="after-li">
                          <div class="singel-hr">
                            <div class="singel-hr-inner" data-height="{{ $skill->degree }}%">
                              <div class="skill-visiable">
                                <span class="skill-title">{{ $skill->title }}</span>
                                <div class="hr-wrap">
                                  <div class="hrc"></div>
                                </div>
                              </div>
                            </div>
                            <span class="skill-count">{{ $skill->degree }}%</span>
                          </div>
                        </div>
                      </div>
                      <!-- /single skill-->
                    @endforeach
                  @endif

                </div>
              </div>
            </div>
            <!-- /skills container -->
          </div>
        </div>
        <div class="btn-wrapp skl-ctrl">
          <a class="btn-floating waves-effect waves-light btn-large brand-bg white-text go go-left"><i class="mdi-navigation-chevron-left "></i></a>
          <a class="btn-floating waves-effect waves-light btn-large brand-bg white-text go go-right"><i class="mdi-navigation-chevron-right "></i></a>
        </div>
      </div>
    </div>
    <!-- .container end -->
  </section>

  <section id="experience" class="root-sec padd-tb-120 brand-bg experience-wrap">
    <div class="container">
      <div class="row">
        <div class="experience-inner">
          <div class="col-sm-12 col-md-10 card-box-wrap">
            <div class="row">
              <div class="clearfix section-head experience-text">
                <div class="col-sm-12">
                  <h2 class="title">Service</h2>
                  <p class="regular-text">We are your digital angels<br>
                    Don’t worry we are always here for you
                    </p>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="overflow-hidden">
                  <div class="row">
                    <div id="experienceSlider" class="clearfix card-element-wrapper">

                      @if($services->count() > 0)
                        @foreach($services as $service)
                          <div class="col-sm-4 cold-xs-12 single-card-box wow fadeInUpSmall" data-wow-duration=".7s" data-wow-delay=".2s" >
                            <div class="card">
                              <div class="card-image waves-effect waves-block waves-light">
                                <h2 class="left-align card-title-top">{{ $service->name }}</h2>
                                <div class="valign-wrapper card-img-wrap">
                                  <img class="activator" src="{{ Storage::url($service->image) }}" alt="{{ $service->name }}">
                                </div>
                              </div>
                              <div class="card-content">
                                <span class="card-title activator brand-text">{{ $service->name }}<i class="mdi-navigation-more-vert right"></i></span>
                              </div>
                              <div class="card-reveal">
                                <div class="rev-title-wrap">
                                  <span class="card-title activator brand-text">{{ $service->name }}<i class="mdi-navigation-close right"></i></span>
                                </div>
                                <p class="rev-content">{{ $service->description }}</p>
                              </div>
                            </div>
                          </div>
                        @endforeach
                      @endif

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="btn-wrapp exp-ctrl">
            <a class="btn-floating waves-effect waves-light btn-large white go go-left"><i class="mdi-navigation-chevron-left brand-text"></i></a>
            <a class="btn-floating waves-effect waves-light btn-large white go go-right"><i class="mdi-navigation-chevron-right brand-text"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Education -->

</section>
<!-- #resume Section end -->
