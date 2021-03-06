<!-- Portfolio Section start -->
<section id="portfolio" class="scroll-section root-sec white portfolio-wrap">
  <div class="padd-tb-120 brand-bg portfolio-top">
    <div class="portfolio-inner">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="title">PORTFOLIO</h2>
            <ul class="inline-menu clearfix portfolio-category" id="portfolio-msnry-sort">
              <li class="active"><a href="#" data-target="*">All</a>
              </li>
              @if($portfolios->count() > 0)
                @foreach($portfolios as $type => $portos)
                <li>
                  <a href="#" data-target=".category-{{ $type }}">{{ $type }}</a>
                </li>
                @endforeach
              @endif
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- .container end -->
  </div>
  <div id="portfolioModal" class="modal white">
    <div class="model-img"></div>
    <div class="modal-content">
      <h2 class="title">Lorem ipsum dolor sit fugit dolore.</h2>
      <p class="m-content">A portfolio is a collection of documents and writing that you assemble in order to demonstrate that you have the appropriate prior.</p>
    </div>

    <div class="modal-footer">
      <a href="#" target="_blank" class="waves-effect btn-flat brand-text modal-action">Live Demo</a>
      <a href="#" class="waves-effect btn-flat brand-text modal-action modal-close">cancel</a>
    </div>
  </div>

  <div class="portfolio-bottom">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <ul class="clearfix protfolio-item" id="protfolio-msnry">

            @if($portfolios->count() > 0)
              @foreach($portfolios as $portos)
                @foreach($portos as $porto)
                  <!-- Single Portfolio-->
                  <li class="single-port-item category-{{ $porto->type }}">
                    <a href="#portfolioModal" class="waves-effect waves-block waves-light modal-trigger" 
                      data-image-source="{{ Storage::url($porto->image) }}" 
                      data-title="{{ $porto->name }}" 
                      data-content="{{ $porto->description }}" 
                      data-demo-link="{{ !empty($porto->link) ? $porto->link : '#' }}">

                      <div class="protfolio-image">
                        <img src="{{ Storage::url($porto->image) }}" alt="{{ $porto->name }}">
                        <div class="protfolio-content waves-effect waves-block waves-light">
                          <div class="protfolio-content__inner">
                            <h2 class="p-title">{{ $porto->name }}</h2>
                          </div>
                        </div>
                        <div class="p-overlay"></div>
                      </div>
                    </a>
                  </li>
                  <!--/ single portfolio -->
                @endforeach
              @endforeach
            @endif

          </ul>
          <!-- portfolio load more button-->
          <a id="portfolio-item-loader" href="#" class="btn-floating btn-large waves-effect waves-light brand-bg"><i class="mdi-content-add"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- #portfolio Section end -->