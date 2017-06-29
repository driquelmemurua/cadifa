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

                <li><a href="{{ route('stories') }}"> <span class="text-primary"> Historias </span></a></li>
                <li><a href="{{ route('designs') }}"> <span class="text-primary">  Diseños </span></a></li>
                <li><a href="{{ route('contact') }}"> <span class="text-primary"> Contacto </span></a></li>

            </ul>

            <!-- Right Side Of Navbar -->
                <div class=" navbar-right">
                <!-- Authentication Links -->
                    <div class="row">

                        <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">
                            <img src="star.png" style="width: 20px"> 
                            {{ Auth::user()->name }} 
                        </button>

                    </div>

                    <div class="row">
                        <div id="demo" class="collapse ">
                        
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">

                                                <span style="display: inline-block; width: 10px"></span> 
                                                Logout

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
