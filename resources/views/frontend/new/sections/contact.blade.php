<!-- Contact Section end -->
<section id="contact" class="scroll-section root-sec brand-bg padd-tb-120 contact-wrap">
  <div class="container">
    <div class="row">
      <div class="contact-inner">
        <div class="col-sm-12 card-box-wrap">
          <div class="row">
            <div class="clearfix section-head contact-text">
              <div class="col-sm-12">
                <h2 class="title">Contact</h2>
                <p class="regular-text">{{ SectionService::settings('address_'. app()->getLocale()) }}</p>
                <ul class="clearfix contact-info">
                  <li><a href="#">{{ SectionService::settings('phone') }}</a>
                  </li>
                  <li><a href="#">{{ SectionService::settings('email') }}</a>
                  </li>
                </ul>
              </div>
            </div> <!-- contact text end -->

            <div class="clearfix contact-form">

              <!-- Map Start -->
              <div class="col-sm-7">
                <div class="map-wrapper">
                  <div id="map"></div>
                </div>
              </div> <!-- Map end -->

              <!-- Contact Form start -->
              <div class="col-sm-5">
                <div class="clearfix card-panel grey lighten-5 cform-wrapper">
                  <form action="{{ route('contact') }}" id="contactForm" method="POST" novalidate>
                    <div class="input-field">
                      <input id="contact_name" type="text" name="name" class="validate input-box">
                      <label for="contact_name" class="input-label">Name</label>
                    </div>
                    <div class="input-field">
                      <input id="email" type="email" name="email" class="validate input-box">
                      <label for="email" class="input-label">Email</label>
                    </div>
                    <div class="input-field">
                      <input id="subject" type="text" name="subject" class="validate input-box">
                      <label for="subject" class="input-label">Subject</label>
                    </div>
                    <div class="input-field textarea-input">
                      <textarea id="textarea1" name="message" class="validate materialize-textarea" style="height: 22px;"></textarea>
                      <label for="textarea1" class="input-label">Message</label>
                    </div>
                    <div class="input-field submit-wrap clearfix">
                      <button type="submit" class="left waves-effect btn-flat brand-text submit-btn">send message</button>
                      <div class="right form-loader-area">
                        <svg class="circular size-20" height="20" width="20">
                          <circle class="path" cx="10" cy="10" r="7" fill="none" stroke-width="3" stroke-miterlimit="10" />
                        </svg>
                      </div>
                    </div>
                  </form>
                </div>
              </div> <!-- ./contact form end -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> <!-- ./container end -->
  <div class="section-call-to-area">
    <div class="container">
      <div class="row">
        <a href="#home" class="btn-floating btn-large button-middle call-to-home section-call-to-btn animated btn-up btn-hidden" data-section="#home">
          <i class="mdi-navigation-expand-less"></i>
        </a>
      </div>
    </div>
  </div>
</section>
<!-- #contact Section end -->

@push('script')
    <script>
        $('#contactForm').on('submit', function(e) {
        e.preventDefault();
        var $this = $(this),
            data = $this.serialize(),
            name = $this.find('#contact_name'),
            email = $this.find('#email'),
            message = $this.find('#textarea1'),
            loader = $this.find('.form-loader-area'),
            submitBtn = $this.find('button, input[type="submit"]');

        loader.show();
        submitBtn.attr('disabled', 'disabled');

        function success(response) {
            swal("Thanks!", "Your message has been sent successfully!", "success");
            $this.find("input, textarea").val("");
            var hand = setTimeout(function() {
                loader.hide();
                submitBtn.removeAttr('disabled');
                clearTimeout(hand);
            }, 1000);
        }

        function error(response) {
            $this.find('input.invalid, textarea.invalid').removeClass('invalid');
            if (response.name) {
                name.removeClass('valid').addClass('invalid');
            }

            if (response.email) {
                email.removeClass('valid').addClass('invalid');
            }

            if (response.message) {
                message.removeClass('valid').addClass('invalid');
            }
        }

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: "POST",
            url: "{{ route('contact') }}",
            data: data,
            success: function(response) {
                success(response);
            },
            error: function(response) {
              sweetAlert("Oops...", "Something went wrong, Try again later!", "error");
              var hand = setTimeout(function() {
                  loader.hide();
                  submitBtn.removeAttr('disabled');
                  clearTimeout(hand);
              }, 1000);
            }
        });
    });


    </script>
@endpush