<style>
        @media (max-width: 991.98px){
            .ftco-navbar-light:not(.scrolled) .navbar-nav > .nav-item > .nav-link {
                color: rgb(0, 0, 0);
            }
        }
</style>

<div class="hero-wrap js-fullheight">
    <div class="overlay app-home"></div>
    <div class="container-fluid px-0">
        <div class="row d-md-flex no-gutters slider-text align-items-center js-fullheight justify-content-end">
            <img class="one-third js-fullheight align-self-end order-md-last img-fluid" src="images/undraw_pair_programming_njlp.svg" alt="">
            <div class="one-forth d-flex align-items-center ftco-animate js-fullheight">
                <div class="text mt-5 {{ $text_align }}">
                    <span class="subheading"> {{ __('home.hello') }} </span>
                    <h1 class="mb-3"> {{ __('home.design-development') }} </h1>
                    <p>{!! isset($settings->about) ? str_replace(["<p>", "</p>"], ["", "\n"], nl2br(html_entity_decode($settings->about))) : "" !!}</p>
                    <p><a href="#" class="btn btn-primary px-4 py-3"> {{ __('home.getin-touch') }} </a></p>
                </div>
            </div>
        </div>
    </div>
</div>
