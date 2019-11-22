<!-- Team Section end -->
<section id="team" class="scroll-section root-sec brand-bg padd-tb-120 team-wrap">
  <div class="container">
    <div class="row">
      <div class="clearfix team-inner">
        <div class="col-sm-12 col-md-10 card-box-wrap">
          <div class="row">
            <div class="clearfix section-head team-text">
              <div class="col-sm-12">
                <h2 class="title">our team</h2>
                <p class="regular-text">Our Team combines a unique combination of creativity, experience, knowledge but most of all a shared 'can do' attitude to help clients get the very best support, advice and project management to achieve business goals.</p>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="overflow-hidden">
                <div class="row">
                  <div id="teamSlider" class="clearfix card-element-wrapper">
                    
                    @foreach($members as $member)
                      <div class="col-sm-4 single-card-box wow fadeInUpSmall" data-wow-delay=".2s" data-wow-duration=".7s">
                        <div class="card">
                          <div class="card-image waves-effect waves-block waves-light">
                            <div class="card-img-wrap">
                              <img class="activator" src="{{ Storage::url($member->image) }}" alt="{{ $member->name }}">
                            </div>
                          </div>
                          <div class="card-content">
                            <span class="card-title activator brand-text">{{ $member->name }}<i class="mdi-navigation-more-vert right"></i></span>
                            <p>{{ $member->job_title }}</p>
                          </div>
                          <div class="card-reveal">
                            <div class="rev-title-wrap">
                              <span class="card-title activator brand-text">{{ $member->name }}<i class="mdi-navigation-close right"></i></span>
                              <p>{{ $member->job_title }}</p>
                            </div>
                            <p class="rev-content">
                              {{ $member->about }}
                            </p>
                          </div>
                        </div>
                      </div> <!-- single team member -->
                    @endforeach
                    
                  </div> <!-- #teamSlider end -->
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="btn-wrapp tmu-ctrl">
          <a class="btn-floating waves-effect waves-light btn-large white go go-left"><i class="mdi-navigation-chevron-left brand-text"></i></a>
          <a class="btn-floating waves-effect waves-light btn-large white go go-right"><i class="mdi-navigation-chevron-right brand-text"></i></a>
        </div>
      </div>
    </div>

  </div> <!-- .container -->
</section>
<!-- #team Section end -->