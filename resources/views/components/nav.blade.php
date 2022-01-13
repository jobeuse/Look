 <!-- Header Start -->
    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                    <div class="cs-logo">
                        <div class="cs-media">
                            <figure><a href="{{ route('home') }}"><img src="{{ asset('assets/images/cs-logo.png') }}" alt="" /></a></figure>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                    <div class="cs-main-nav pull-right">
                        <nav class="main-navigation">
                            <ul>
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><a href="{{ route('services') }}">Services</a></li>
                                <li><a href="#">About Us</a></li> 
                                 <li class="cs-user-option"> 
                                    <div class="cs-login">
                                         @if (Auth::check()) 
                                        <div class="cs-login-dropdown"> <a href="#"><i class="icon-user2"></i> Kaiser <i class="icon-chevron-down2"></i></a>
                                            <div class="cs-user-dropdown"> <strong>User Settings</strong>
                                                <ul>
                                                    <li><a href="{{ route('profile') }}">General Setting </a></li>
                                                     
                                                    <li>
                                                        <form action="{{ route('logout') }}" method="post">
                                                            @csrf
                                                            <button type="submit" class="btn btn-block  btn-danger">Logout</button>
                                                        </form>
                                                    </li>
                                               
                                                
                                                 </ul>
                                             </div>
                                        </div>
                                        @else
                                            <a class="cs-bgcolor btn-form" data-toggle="modal" href="http://chimpgroup.com/themeforest/automobile/remote.html" data-target="#user-sign-up" aria-hidden="true"><i class="icon-plus"></i> Login/ Create An Account</a> 

                                        @endif
                                        
                                        @include('auth.login')
                                        @include('auth.register')
                                        {{-- @include('auh.forgot') --}}
                                    </div>
 
                                </li>          

                            </ul>
                        </nav>
                         
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End --> 
    