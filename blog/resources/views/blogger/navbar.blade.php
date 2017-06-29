<nav class="navbar navbar-default navbar-static-top" style="background-color: #190542">
    <div class="container">
        <div class="navbar-header" >

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                <span>                    
                    <img src="star.png" style="width: 20px"> 
                </span>

                <span class="text-primary">{{ config('app.name', 'Mi blog') }}</span>
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">

            <!-- Left Side Of Navbar -->

            <ul class="nav navbar-nav">
                &nbsp;
                <li><a href="{{ route('stories') }}"> <span class="text-primary"> Historias </span></a></li>
                <li><a href="{{ route('designs') }}"> <span class="text-primary">  Diseños </span></a></li>
                <li><a href="{{ route('contact') }}"> <span class="text-primary"> Contacto </span></a></li>
                <li><a href="{{ route('entry') }}"> <span class="text-primary"> Subir entrada </span></a></li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::guard('bloggers')->user()->name }} <span class="caret"></span>
                    </a>

                    <ul>
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <img src="star.png" style="width: 20px"> 
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

