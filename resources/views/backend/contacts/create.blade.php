@extends('backend.layouts.app')

@section('page-title')
Contacts | Create
@endsection

@section('content')

  <style>
     .note-editing-area{
        margin-top: 10px!important;
     }
     .note-editor{
        padding: 7px!important;
        border: 1px solid #ddd!important;
        box-shadow: 1px 1px 20px #ddd!important;
     }
  </style>

  <aside class="page-aside">
      <div class="be-scroller-aside">
      <div class="aside-content">
          <div class="content">
          <div class="aside-header">
              <button class="navbar-toggle" data-target=".aside-nav" data-toggle="collapse" type="button"><span class="icon mdi mdi-caret-down"></span></button><span class="title">Mail Service</span>
              <p class="description">Sending & Recieving Mails</p>
          </div>
          </div>
          <div class="aside-nav collapse">
          <ul class="nav">
              <li><a href="{{ route('contacts.inbox') }}"><span class="badge badge-primary">{{ $inboxContacts }}</span><i class="icon mdi mdi-inbox"></i>Inbox</a></li>
              <li><a href="{{ route('contacts.index') }}"><i class="icon mdi mdi-email"></i>Sent Mail</a></li>
              <li><a href="{{ route('contacts.favourite') }}"><i class="icon mdi mdi-star"></i>Favourites</a></li>
              <li><a href="{{ route('contacts.trash') }}"><i class="icon mdi mdi-delete"></i>Trash</a></li>
          </ul>
          </div>
      </div>
      </div>
  </aside>

    <div class="main-content container-fluid">
      <div class="email-head">
        <div class="email-head-title">Compose new message<span class="icon mdi mdi-edit"></span></div>
      </div>

            @if(Session::has('success'))
            <div class="col-sm-12 alert alert-success p-3 mt-3">{{ session('success') }}</div>
            @endif

      <form action="{{ route('contacts.store') }}" method="post" enctype="multipart/form-data">
      @csrf

      <input type="hidden" name="type" value="sender">

      <div class="email-compose-fields">
        <div class="to">
            <div class="form-group row mt-2">
                <label class="col-2 col-lg-2 col-form-label text-right" for="inputEmail2">Sender Name</label>
                <div class="col-10 col-lg-10">
                  <input class="form-control" id="inputEmail2" type="text" name="name" value="4-Soft" placeholder="Name Of Company Or User">
                </div>
              </div>
        </div>

        <div class="form-group row">
            <label class="col-2 col-lg-2 col-form-label text-right" for="inputEmail3">Send To</label>
            <div class="col-10 col-lg-10">
              <input class="form-control" id="inputEmail3" type="email" name="email" placeholder="Email">
            </div>
          </div>

          <div class="form-group row ">
              <label class="col-2 col-lg-2 col-form-label text-right" for="inputEmail4">Subject</label>
              <div class="col-10 col-lg-10">
                <input class="form-control" id="inputEmail4" type="text" name="subject" placeholder="Subject/Title Of Mail">
              </div>
          </div>
      </div>

      <div class="email editor">
          <label for="editor2" class="h3">The Message</label>
          <textarea name="message" id="mailbox" class="form-control mt-4"></textarea>

          <button class="btn btn-success btn-space mt-3 w-100 btn-lg " type="submit"><i class="icon s7-mail"></i> Send Mail</button>

    </form>
        <div class="form-group">
          <button class="btn btn-secondary btn-space" type="button"><i class="icon s7-close"></i> Cancel</button>
        </div>
      </div>

    </div>
  </div>


@endsection

@push('css')
<link rel="stylesheet" href="{{ asset('lib/summernote/summernote-bs4.css') }}">
@endpush

@push('js')
<script src="{{ asset('lib/summernote/summernote-bs4.min.js') }}"></script>
<script src="{{ asset('lib/summernote/summernote-ext-beagle.js') }}"></script>

<script>
    $(document).ready(function() {
        App.init();
        App.mailInbox();
        App.textEditors("#mailbox", 190);

        $(".inputfile").each(function() {
            var e = $(this),
                t = e.next("label"),
                i = t.html();

            e.on("change", function(e) {
                var a = "";
                this.files && this.files.length > 1 ? a = (this.getAttribute("data-multiple-caption") || "").replace("{count}", this.files.length) : e.target.value && (a = e.target.value.split("\\").pop()), a ? t.find("span").html(a) : t.html(i)
            })
        })


    });
</script>
@endpush