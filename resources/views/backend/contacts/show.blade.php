@extends('backend.layouts.app')

@section('page-title')
contacts
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
                    <li><a href="{{ route('contacts.inbox') }}"><span class="badge badge-primary">{{ $inboxContacts }}</span><i class="icon mdi mdi-inbox"></i>Inbox</a></li>
                    <li class="active"><a href="{{ route('contacts.index') }}"><i class="icon mdi mdi-email"></i>Sent Mail</a></li>
                    <li><a href="{{ route('contacts.favourite') }}"><i class="icon mdi mdi-star"></i>Favourites</a></li>
                    <li><a href="{{ route('contacts.trash') }}"><i class="icon mdi mdi-delete"></i>Trash</a></li>
                </ul>
                <div class="aside-compose"><a class="btn btn-lg btn-primary btn-block" href="{{ route('contacts.create') }}">Compose Email</a></div>
                </div>
            </div>
            </div>
          </aside>

            <div class="main-content container-fluid">
                    <div class="email-head">
                      <div class="email-head-subject">
                                <div class="title">
                                   <small class="text-success">@subject: </small> {{ $contact->subject }}
                                </div>
                      </div>
                      <div class="email-head-sender">
                        <div class="date">{{ $contact->created_at->diffForHumans() }}</div>
                        <div class="sender"><a href="#">{{ $contact->name }}</a> to <a href="#">{{ $contact->email }}</a>
                          
                        </div>
                      </div>
                    </div>
                    <div class="email-body"> 
                       <?php echo html_entity_decode($contact->message); ?>
                    </div>
                  </div>

@endsection

@push('css')

@endpush

@push('js')

<script>
    $(document).ready(function() {
        App.mailInbox();
    });
</script>
@endpush