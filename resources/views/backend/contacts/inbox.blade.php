@extends('backend.layouts.app')

@section('page-title')
Contacts | Inbox
@endsection

@section('content')

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
                        <li class="active"><a href="#"><span class="badge badge-primary">{{ $inboxContacts }}</span><i class="icon mdi mdi-inbox"></i>Inbox</a></li>
                        <li><a href="{{ route('contacts.index') }}"><i class="icon mdi mdi-email"></i>Sent Mail</a></li>
                        <li><a href="{{ route('contacts.favourite') }}"><i class="icon mdi mdi-star"></i>Favourites</a></li>
                        <li><a href="{{ route('contacts.trash') }}"><i class="icon mdi mdi-delete"></i>Trash</a></li>
                    </ul>
                    <div class="aside-compose"><a class="btn btn-lg btn-primary btn-block" href="{{ route('contacts.create') }}">Compose Email</a></div>
                    </div>
                </div>
                </div>
            </aside>


            <div class="main-content container-fluid " style="margin-top:-25px;margin-left:">
              <div class="email-inbox-header">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="email-title"><span class="icon mdi mdi-inbox"></span> Inbox <span class="new-messages">(2 new messages)</span>  </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="email-search">
                      <div class="input-group input-search input-group-sm">
                        <input class="form-control" type="text" placeholder="Search mail..."><span class="input-group-btn">
                          <button class="btn btn-secondary" type="button"><i class="icon mdi mdi-search"></i></button></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="email-filters">
                <div class="email-filters-left">
                  <label class="custom-control custom-checkbox be-select-all">
                    <input class="custom-control-input" type="checkbox"><span class="custom-control-label"></span>
                  </label>
                  <div class="btn-group">
                    <button class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" type="button">
                       With selected <span class="caret"></span></button>
                    <div class="dropdown-menu" role="menu"><a class="dropdown-item" href="#">Mark as rea</a><a class="dropdown-item" href="#">Mark as unread</a><a class="dropdown-item" href="#">Spam</a>
                      <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Delete</a>
                    </div>
                  </div>
                  <div class="btn-group">
                    <button class="btn btn-secondary" type="button">Archive</button>
                    <button class="btn btn-secondary" type="button">Span</button>
                    <button class="btn btn-secondary" type="button">Delete</button>
                  </div>
                  <div class="btn-group">
                    <button class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" type="button">Order by <span class="caret"></span></button>
                    <div class="dropdown-menu dropdown-menu-right" role="menu"><a class="dropdown-item" href="#">Date</a><a class="dropdown-item" href="#">From</a><a class="dropdown-item" href="#">Subject</a>
                      <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Size</a>
                    </div>
                  </div>
                </div>
                <div class="email-filters-right"><span class="email-pagination-indicator">1-50 of 253</span>
                  <div class="btn-group email-pagination-nav">
                    <button class="btn btn-secondary" type="button"><i class="mdi mdi-chevron-left"></i></button>
                    <button class="btn btn-secondary" type="button"><i class="mdi mdi-chevron-right"></i></button>
                  </div>
                </div>
              </div>
              @forelse ($contacts as $contact)
              <div class="email-list-item" data-uri="{{ route('contacts.show', [ 'id'=> $contact->id ]) }}">
                <div class="email-list-actions">
                  <label class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox"><span class="custom-control-label"></span>
                  </label>
                    <form class="mt-2" action="{{ route('contacts.favouritePost', ['id'=> $contact->id ]) }}" method="post">
                      @csrf
                      @method('PUT')
                      <input type="hidden" name="favourite" value="@if($contact->favourite === 1) 0 @else 1 @endif">
                      <a class="favorite @if($contact->favourite === 1) active @endif" href="#"><span class="mdi mdi-star"></span></a>
                      <button style="position: absolute;width: 25px;height: 20px;top: 48px;opacity: 0;"></button>
                    </form>
                </div>
                <form action="{{ route('contacts.destroy', ['id'=>$contact->id]) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <i class="icon text-danger mdi mdi-delete delete_icon" style="display:none;font-size:30px;position:absolute;right:0;"><button style="width: 20px;position: absolute;right: -1px;height: 28px;opacity:0;" class=""></button></i>
                </form>

                <div class="email-list-detail"><span class="date float-right">{{ $contact->created_at->diffForHumans() }}</span><span class="from">{{ $contact->email }}</span>
                  <p class="msg"> {{ Str::limit(str_replace('&nbsp;', ' ',htmlspecialchars_decode(strip_tags(html_entity_decode($contact->message)))), 150, '...') }}</p>
                </div>
              </div>
              @empty
                <div class="email-list-item text-center">No Mails / Messages</div>
              @endforelse
 
                <div class="text-center mt-3">
                    {{ $contacts->links() }}
                </div>
            </div>
          </div>

@endsection

@push('css')

@endpush

@push('js')

<script>
  $(document).ready(function() {
      App.mailInbox();
      $(".email-list-item").click(function(){
        location.assign($(this).data('uri'));
      });
      $(".email-list-item").hover(function(){
          $(this).css("opacity", '.8');
          $(this).find('.delete_icon').show().animate({
              right: "20%",
              top: "11%",
          }, 300);
      }, function(){
        $(this).css("opacity", '1');
        $(this).find('.delete_icon').animate({
            right: "0",
            top: "11%",
        }, 300).hide(200);
      });
  });
</script>
@endpush