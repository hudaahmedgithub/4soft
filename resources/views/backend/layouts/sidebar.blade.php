<div class="be-left-sidebar">
    <div class="left-sidebar-wrapper">
        <a class="left-sidebar-toggle" href="#">
            @yield('page-title')
        </a>
        <div class="left-sidebar-spacer">
            <div class="left-sidebar-scroll">
                <div class="left-sidebar-content">
                    <ul class="sidebar-elements">
                        <li class="divider">Menu</li>
                        <li>
                            <a href="{{ route('home') }}">
                                <i class="icon mdi mdi-home"></i>
                                <span>Home</span>
                            </a>
                        </li>
                        
                        <li class="divider">Landing Page Management</li>

                        {{--
                        <li>
                            <a href="{{ route('sections.index') }}">
                                <i class="icon mdi mdi-inbox"></i>
                                <span>Website Sections</span>
                            </a>
                        </li>
                        --}}
                        <li>
                            <a href="{{ route('services.index') }}">
                                <i class="icon mdi mdi-inbox"></i>
                                <span>Services</span>
                            </a>
                        </li>
						 <li>
                            <a href="{{ route('course.index') }}">
                                <i class="icon mdi mdi-inbox"></i>
                                <span>Courses</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('members.index') }}">
                                <i class="icon mdi mdi-inbox"></i>
                                <span>Team Members</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('portfolios.index') }}">
                                <i class="icon mdi mdi-inbox"></i>
                                <span>Portfolios</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('customers.index') }}">
                                <i class="icon mdi mdi-inbox"></i>
                                <span>Customers</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('partners.index') }}">
                                <i class="icon mdi mdi-inbox"></i>
                                <span>Partners</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('skills.index') }}">
                                <i class="icon mdi mdi-inbox"></i>
                                <span>Skills</span>
                            </a>
                        </li>
                        
                        <li class="divider">Other</li>

                        <li>
                            <a href="{{ route('contacts.index') }}">
                                <i class="icon mdi mdi-inbox"></i>
                                <span>Contacts</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('settings.index') }}">
                                <i class="icon mdi mdi-inbox"></i>
                                <span>Settings</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
