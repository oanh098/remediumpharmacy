


<nav class="navbar navbar-expand-md navbar-light bg-light main-nav">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse flex-1">
            <ul class="nav navbar-nav w-100">
                <li class="nav-item active">
                    <a class="nav-link" href="index">Home</a>
                </li>

                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="dropdown_target">About Us
                        <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdown_target">
                        <a href="our-philosophy" class="dropdown-item">Our Philosophy</a>
                        <a href="our-research" class="dropdown-item">Our Research</a>
                        <a href="our-commitment" class="dropdown-item">Our Commitment</a>
                        <a href="our-senior-team" class="dropdown-item">Our Senior Team</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="dropdown_target">CBD and THC
                        <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdown_target">
                        <a href="overview" class="dropdown-item">Overview</a>
                        <a href="cannabinoids" class="dropdown-item">Cannabinoids</a>
                        <a href="tetrahydrocannabinol" class="dropdown-item">Tetrahydrocannabinol</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="dropdown_target">Medical Focus
                        <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdown_target">
                        <a href="overview2" class="dropdown-item">Overview</a>
                        <a href="immunology" class="dropdown-item">Immunology</a>
                        <a href="oncology" class="dropdown-item">Oncology</a>
                        <a href="neuroscience" class="dropdown-item">Neuroscience</a>
                        <a href="virology" class="dropdown-item">Virology</a>
                        <a href="general-medicine" class="dropdown-item">General Medicine</a>
                    </div>
                </li>



            </ul>
        </div>
        <div class="order-first order-md-0 d-flex justify-content-center">
            {{--            <a class="navbar-brand mx-0" href="#">Brand</a>--}}
            <a class="navbar-brand mx-0" href="#"><img src="{{asset('FrontEnd')}}/menulogo.png" alt=""></a>
        </div>
        <div class="collapse navbar-collapse flex-1">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="press-releases">Press Releases</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="investor-relation">Investor Relation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact-us">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
