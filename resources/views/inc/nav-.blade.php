<nav id="ttr_menu" class="navbar-default navbar">
    <div id="ttr_menu_inner_in">
        <div id="navigationmenu">
            <div class="container" style="display: flex; flex-direction: row; background-color: red; justify-content: space-around; position: relative; horiz-align: center" >
{{--            <div class="ttr_menu_element_alignment container" style="display: flex; flex-direction: row; background-color: red" >--}}
{{--            </div>--}}
            <div  style="background-color: #00BCDB; position: absolute; margin-left: 65px; margin-top: 25px">
{{--            <div class="ttr_menu_logo" style="background-color: #00BCDB; flex-grow: 1">--}}
                <img src="{{asset('FrontEnd')}}/menulogo.png" alt="menuimage" />
            </div>
            <div  style="background-color: orange; ">
{{--            <div class="navbar-header" style="background-color: orange; ">--}}
                <button id="nav-expander" data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                    <span class="ttr_menu_toggle_button">
                    <span class="sr-only">
                    </span>
                    <span class="icon-bar">
                    </span>
                    <span class="icon-bar">
                    </span>
                    <span class="icon-bar">
                    </span>
                    </span>
                    <span class="ttr_menu_button_text">
                            Menu
                    </span>
                </button>
            </div>
            <div  style="background-color: yellow; width: 100%; " >
{{--            <div class="menu-center collapse navbar-collapse" style="display: flex; background-color: yellow; flex-grow: 1" >--}}
                <ul class="ttr_menu_items nav navbar-nav nav-justified" style="display: flex; flex-direction: row;  align-items: stretch; justify-content: flex-start">
{{--                    <div style="display: flex; flex-flow: row wrap; justify-content: space-around;">--}}

                    <li class="ttr_menu_items_parent dropdown active " style="flex-grow: 1; flex-basis: auto" ><a href="index" class="ttr_menu_items_parent_link_active"><span class="menuchildicon"></span>Home</a>
                        <hr class ="horiz_separator"/>
                    </li> <!-- main menu list closing -->
                    <li class="ttr_menu_items_parent dropdown" style="flex-grow: 1; flex-basis: auto"><a href="about-us" class="ttr_menu_items_parent_link_arrow dropdown-toggle" data-toggle="dropdown"><span class="menuchildicon"></span>About Us</a>
                        <hr class ="horiz_separator"/>
                        <ul class="child dropdown-menu" role="menu">
                            <li><a href="our-philosophy"><span class="menuchildicon"></span>Our Philosophy</a>
                                <hr class ="separator"/>
                            </li> <!-- 1st level child list closing -->
                            <li><a href="our-research"><span class="menuchildicon"></span>Our Research</a>
                                <hr class ="separator"/>
                            </li> <!-- 1st level child list closing -->
                            <li><a href="our-commitment"><span class="menuchildicon"></span>Our Commitment</a>
                                <hr class ="separator"/>
                            </li> <!-- 1st level child list closing -->
                            <li><a href="our-senior-team"><span class="menuchildicon"></span>Our Senior Team</a>
                            </li> <!-- 1st level child list closing -->
                        </ul>
                    </li> <!-- main menu list closing -->
                    <li class="ttr_menu_items_parent dropdown" style="flex-grow: 1; flex-basis: auto" ><a href="cbd-and-thc" class="ttr_menu_items_parent_link_arrow dropdown-toggle" data-toggle="dropdown"><span class="menuchildicon"></span>CBD and THC</a>
                        <hr class ="horiz_separator"/>
                        <ul class="child dropdown-menu" role="menu">
                            <li><a href="overview"><span class="menuchildicon"></span>Overview</a>
                                <hr class ="separator"/>
                            </li> <!-- 1st level child list closing -->
                            <li><a href="cannabinoids"><span class="menuchildicon"></span>Cannabinoids</a>
                                <hr class ="separator"/>
                            </li> <!-- 1st level child list closing -->
                            <li><a href="tetrahydrocannabinol"><span class="menuchildicon"></span>Tetrahydrocannabinol</a>
                            </li> <!-- 1st level child list closing -->
                        </ul>
                    </li> <!-- main menu list closing -->
                    <li class="ttr_menu_items_parent dropdown" style="flex-grow: 2; text-align: left;  flex-basis: auto" >
                        <a href="medical-focus" class="ttr_menu_items_parent_link_arrow dropdown-toggle" data-toggle="dropdown" style="text-align: left"><span class="menuchildicon">Medical Focus</span></a>
                        <hr class ="horiz_separator"/>
                        <ul class="child dropdown-menu" style="text-align: left" role="menu">
                            <li><a href="overview2"><span class="menuchildicon"></span>Overview</a>
                                <hr class ="separator"/>
                            </li> <!-- 1st level child list closing -->
                            <li><a href="immunology"><span class="menuchildicon"></span>Immunology</a>
                                <hr class ="separator"/>
                            </li> <!-- 1st level child list closing -->
                            <li><a href="oncology"><span class="menuchildicon"></span>Oncology</a>
                                <hr class ="separator"/>
                            </li> <!-- 1st level child list closing -->
                            <li><a href="neuroscience"><span class="menuchildicon"></span>Neuroscience</a>
                                <hr class ="separator"/>
                            </li> <!-- 1st level child list closing -->
                            <li><a href="virology"><span class="menuchildicon"></span>Virology</a>
                                <hr class ="separator"/>
                            </li> <!-- 1st level child list closing -->
                            <li><a href="general-medicine"><span class="menuchildicon"></span>General Medicine</a>
                            </li> <!-- 1st level child list closing -->
                        </ul>
                    </li>  <!-- main menu list closing -->
{{--                    <li class="ttr_menu_items_parent dropdown"><a href="logo-copy-0000000" class="ttr_menu_items_parent_link"><span class="menuchildicon"></span>logo-copy</a>--}}
{{--                        <hr class ="horiz_separator"/>--}}
{{--                    </li> <!-- main menu list closing -->--}}
{{--                    <li class="ttr_menu_items_parent dropdown"><a href="logo" class="ttr_menu_items_parent_link"><span class="menuchildicon"></span>logo</a>--}}
{{--                        <hr class ="horiz_separator"/>--}}
{{--                    </li> --}}
                    <!-- main menu list closing -->
{{--                    <li id="menu-logo" >--}}
{{--                            <img src="{{asset('FrontEnd')}}/menulogo.png" alt="menuimage" />--}}
{{--                        </li>--}}

                    <li class="ttr_menu_items_parent dropdown" style="flex-grow: 2; text-align: right"> <a href="press-releases" class="ttr_menu_items_parent_link" style="text-align: right"><span class="menuchildicon"></span>Press Releases</a>
                        <hr class ="horiz_separator"/>
                    </li> <!-- main menu list closing -->
                    <li class="ttr_menu_items_parent dropdown" style="flex-grow: 1"><a href="investor-relation" class="ttr_menu_items_parent_link"><span class="menuchildicon"></span>Investor Relation</a>
                        <hr class ="horiz_separator"/>
                    </li> <!-- main menu list closing -->
                    <li class="ttr_menu_items_parent dropdown" style="flex-grow: 1"><a href="contact-us" class="ttr_menu_items_parent_link"><span class="menuchildicon"></span>Contact Us</a>
                    </li> <!-- main menu list closing -->
{{--                    </div>--}}
                    </ul>
            </div>
        </div>
        </div>
    </div>
</nav>
