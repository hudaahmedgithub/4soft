<style>
    .block-23 ul li .icon, .block-23 ul li .text{
        vertical-align: middle;
        display: inline-flex;
    }

    .block-23 ul li, .block-23 ul li > a{
        line-height: 2.5;
        margin-bottom: 2px;
    }
</style>

<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
        <div class="row mb-5">

            <div class="col-md">
                <div class="ftco-footer-widget mb-4 pl-4 {{ $text_align }}">
                    <h2 class="ftco-heading-2">{{ __('nav.navigational') }}</h2>
                    <ul class="list-unstyled" style="{{ $padding_align }}">
                        <li><a href="#" class="py-2 d-block">{{ __('nav.home') }}</a></li>
                        <li><a href="#" class="py-2 d-block">{{ __('nav.about') }}</a></li>
                        <li><a href="#" class="py-2 d-block">{{ __('nav.contact') }}</a></li>
                        <li><a href="#" class="py-2 d-block">{{ __('nav.login') }}</a></li>
                        <li><a href="#" class="py-2 d-block">{{ __('nav.sign up') }}</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md">
                <div class="ftco-footer-widget mb-4 pl-4 {{ $text_align }}">
                    <h2 class="ftco-heading-2 ">{{ __('nav.office') }}</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><a href="#"><span class="icon icon-map-marker p-1"></span><span class="text">{{ $settings->address ?? '' }}</span></a></li>
                            <li><a href="#"><span class="icon icon-phone p-1"></span><span class="text">{{ $settings->phone ?? '' }}</span></a></li>
                            <li><a href="#"><span class="icon icon-envelope p-1"></span><span class="text">{{ $settings->email ?? '' }}</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-12">
                <div class="ftco-footer-widget mb-4 bg-primary p-4">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <img src="{{ isset($settings->logo) ? Storage::url($settings->logo) : 'images/logo-white.png' }}" style="width: 50%">
                            <p class="{{ $text_align }}">{!! isset($settings->about) ? str_replace(["<p>", "</p>"], ["", "\n"], nl2br(html_entity_decode($settings->about))) : "" !!}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="ftco-footer-social list-unstyled mb-0" @if( \App::isLocale('ar')) style="display: flex;" @endif>
                                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-12 text-center">

                <p>
                    Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                    </script> <bdi class="mr-2"> {{ __("nav.copyright") }} </bdi>  | <a href="http://4soft-eg.com">4soft-eg.com</a>
                </p>
            </div>
        </div>
    </div>
</footer>

<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
