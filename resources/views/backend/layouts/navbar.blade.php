<nav class="navbar navbar-expand fixed-top be-top-header">
  <div class="container-fluid">
    <div class="be-navbar-header">
      <a class="navbar-brand" href="{{ url('/') }}"></a>
    </div>
    <div class="be-right-navbar">
      <ul class="nav navbar-nav float-right be-user-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-expanded="false">
            <img src="{{ Storage::url(auth()->user()->image) }}" alt="Avatar">
            <span class="user-name">{{ auth()->user()->name }}</span>
          </a>
          <div class="dropdown-menu" role="menu">
            <div class="user-info">
              <div class="user-name">{{ auth()->user()->name }}</div>
              <div class="user-position online">Available</div>
            </div>
            <a class="dropdown-item" href="{{ route('users.index') }}">
              <span class="icon mdi mdi-face"></span>Profile
            </a>

            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                <span class="icon mdi mdi-power"></span>Logout
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
          </div>
        </li>
      </ul>
      <div class="page-title">
        <span>
          @yield('page-title')
        </span>
      </div>
      <ul class="nav navbar-nav float-right be-icons-nav">
        {{-- User Informations Section --}}
        <li class="nav-item dropdown">
          <a class="nav-link be-toggle-right-sidebar" href="#" role="button" aria-expanded="false">
            <span class="icon mdi mdi-settings"></span>
          </a>
        </li>
        {{-- Notifications Section --}}
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-expanded="false">
            <span class="icon mdi mdi-notifications"></span>
            <span class="indicator"></span>
          </a>
          <ul class="dropdown-menu be-notifications">
            <li>
              <div class="title">Notifications<span class="badge badge-pill">3</span></div>
              <div class="list">
                <div class="be-scroller-notifications">
                  <div class="content">
                    <ul id="notifications-body">
                      {{-- @foreach(auth()->user()->notifications as $notification)
                        @if($notification->read_at != 'null')
                          <li class="notification notification-unread">
                            <a href="#">
                              <div class="image">
                                <img src="{{ url('img/avatar2.png') }}" alt="Avatar">
                              </div>
                              <div class="notification-info">
                                <div class="text">
                                  {!! $notification->data['message'] !!}
                                </div>
                                <span class="date">{{ $notification->created_at->diffForHumans() }}</span>
                              </div>
                            </a>
                          </li>
                        @else
                          <li class="notification">
                            <a href="#">
                              <div class="image">
                                <img src="{{ url('img/avatar2.png') }}" alt="Avatar">
                              </div>
                              <div class="notification-info">
                                <div class="text">
                                  {!! $notification->data['message'] !!}
                                </div>
                                <span class="date">{{ $notification->created_at->diffForHumans() }}</span>
                              </div>
                            </a>
                          </li>
                        @endif
                      @endforeach --}}
                    </ul>
                  </div>
                </div>
              </div>
              <div class="footer">
                <a href="#">View all notifications</a>
              </div>
            </li>
          </ul>
        </li>
        {{-- Quick Access Menu Section --}}
        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-expanded="false"><span class="icon mdi mdi-apps"></span></a>
          <ul class="dropdown-menu be-connections">
            <li>
              <div class="list">
                <div class="content">
                  <div class="row">
                    <div class="col">
                      <a class="connection-item" href="#">
                        <img src="{{ url('img/github.png') }}" alt="Github">
                        <span>GitHub</span>
                      </a>
                    </div>
                    <div class="col">
                      <a class="connection-item" href="#">
                        <img src="{{ url('img/bitbucket.png') }}" alt="Bitbucket">
                        <span>Bitbucket</span>
                      </a>
                    </div>
                    <div class="col">
                      <a class="connection-item" href="#">
                        <img src="{{ url('img/slack.png') }}" alt="Slack">
                        <span>Slack</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="footer">
                <a href="#">More</a>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
