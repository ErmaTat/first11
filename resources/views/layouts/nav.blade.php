 <!-- START HEADER TOP SECTION -->
 <div class="header-top">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="header-social">
                    <ul>
                        <li><a target="_blank" rel="noopener noreferrer" href="#"><i
                                    class="fab fa-facebook"></i></a></li>
                        <li><a target="_blank" rel="noopener noreferrer" href="#"><i
                                    class="fab fa-x-twitter"></i></a></li>
                        <li><a target="_blank" rel="noopener noreferrer" href="#"><i
                                    class="fab fa-pinterest"></i></a></li>
                        <li><a target="_blank" rel="noopener noreferrer" href="#"><i
                                    class="fab fa-behance"></i></a></li>
                        <li><a target="_blank" rel="noopener noreferrer" href="#"><i
                                    class="fab fa-tiktok"></i></a></li>
                        <li><a target="_blank" rel="noopener noreferrer" href="#"><i
                                    class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div><!-- end of /. header social -->
                <div class="top-left-menu">
                    <ul>
                        <li id="menu-item-303"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-303"><a
                                href="contact/index.htm">Contact</a></li>
                        <li id="menu-item-304"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-304"><a
                                href="#">Donation</a></li>
                    </ul>
                </div><!-- end of /. top left menu -->
            </div>
            <div class="col-md-6">
                <div class="header-right-menu">
                </div><!-- end of /. header top right menu -->
            </div><!-- end of /. col -->
        </div><!-- end of /. row -->
    </div><!-- end of /. container -->
</div><!-- END OF /. HEADER TOP SECTION -->

<div class="header-section">
    <!-- Start Navigation -->
    <nav class="navbar navbar-default cart">
        <div class="container"><!-- Start Atribute Navigation -->

            <!-- End Atribute Navigation -->
            <!-- Start Header Navigation -->
            <div class="clear"></div>

            <div class="navbar-header">
                <div class="main-logo-toggle">
                    <button type="button" class="hidden-xs navbar-toggle collapsed top-m-btn"
                        data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                        aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>


                </div>
                <div class="main-logo">
                    <a class="navbar-brand" href="index.htm">
                        <img src="{{ asset('assets/wp-content/uploads/2017/10/wi-options-main-logo-bg-1.png')}}" class="logo"
                            alt="Escobars">
                    </a>
                </div>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse top-nav hidden-xs" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">

                    <li id="menu-item-146"
                        class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item menu-item-146">
                        <a href="{{route('home')}}" aria-current="page">Home</a>
                    </li>
                    <li id="menu-item-125"
                        class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item menu-item-125">
                        <a href="{{route('teams')}}">Clubs</a>

                    </li>
                    <li id="menu-item-195"
                        class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item menu-item-195">
                        <a href="{{'players'}}">Players</a>

                    </li>
                    <li id="menu-item-229"
                        class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item menu-item-229">
                        <a href="{{ route('blogs')}}">Blogs</a>

                    </li>
                    <li id="menu-item-329"
                        class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item menu-item-329">
                        <a href="{{ route('about')}}">About</a>

                    </li>
                    <li id="menu-item-199"
                    class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item menu-item-199">
                    <a href="{{ route('contact')}}">Contact</a>

                    </li>

                    @if(auth()->user())
                    <li id="menu-item-147"
                    class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item menu-item-147">
                    <a href="{{route('dashboard')}}" aria-current="page">Dashboard</a>
                    </li>
                    @else
                    <li id="menu-item-147"
                    class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item menu-item-148">
                    <a href="{{route('login')}}" aria-current="page">LOGIN</a>
                    </li>
                    @endif

                </ul>

            </div><!-- /.navbar-collapse -->



            <div class="mobile-menu_main">
                <!-- Nav button-->
                <div class="nav-button visible-xs">
                    <span class="nos"></span>
                    <span class="ncs"></span>
                    <span class="nbs"></span>
                </div>
                <!-- Nav button end -->

                <div class="mob-menu nav-inner isDown">

                    <div class="main-logo">
                        <a class="navbar-brand" href="index.htm">
                            <img src="{{asset('assets/wp-content/uploads/2017/10/wi-options-main-logo-bg-1.png')}}" class="logo"
                                alt="Escobars">
                        </a>
                    </div>
                    <div id="hid-men">

                        <ul>

                            <li
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-12 current_page_item current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-146">
                                <a href="index.htm" aria-current="page">Home</a>
                                <ul class="sub-menu">
                                    <li
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-12 current_page_item menu-item-294">
                                        <a href="index.htm" aria-current="page">Home Page V.1</a></li>
                                    <li
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-293">
                                        <a href="home-page-2/index.htm">Home Page V.2</a></li>
                                </ul>
                            </li>
                            <li
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-164">
                                <a href="#">Club List</a>
                                <ul class="sub-menu">
                                    <li
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-165">
                                        <a href="#">La Liga</a>
                                        <ul class="sub-menu">
                                            <li
                                                class="menu-item menu-item-type-post_type menu-item-object-club menu-item-166">
                                                <a href="club/teamfoot-copy/index.htm">Teamfoot</a></li>
                                            <li
                                                class="menu-item menu-item-type-post_type menu-item-object-club menu-item-167">
                                                <a href="club/foolianto-copy/index.htm">Foolianto</a></li>
                                            <li
                                                class="menu-item menu-item-type-post_type menu-item-object-club menu-item-168">
                                                <a href="club/legacy-copy/index.htm">Legacy</a></li>
                                            <li
                                                class="menu-item menu-item-type-post_type menu-item-object-club menu-item-169">
                                                <a href="club/real-m/index.htm">Real M.</a></li>
                                            <li
                                                class="menu-item menu-item-type-post_type menu-item-object-club menu-item-172">
                                                <a href="club/legacy/index.htm">Legacy</a></li>
                                        </ul>
                                    </li>
                                    <li
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-174">
                                        <a href="#">Bundeshliga</a>
                                        <ul class="sub-menu">
                                            <li
                                                class="menu-item menu-item-type-post_type menu-item-object-club menu-item-175">
                                                <a href="club/legacy-copy/index.htm">Legacy</a></li>
                                            <li
                                                class="menu-item menu-item-type-post_type menu-item-object-club menu-item-176">
                                                <a href="club/real-m/index.htm">Real M.</a></li>
                                            <li
                                                class="menu-item menu-item-type-post_type menu-item-object-club menu-item-177">
                                                <a href="club/teamfoot/index.htm">Teamfoot</a></li>
                                            <li
                                                class="menu-item menu-item-type-post_type menu-item-object-club menu-item-179">
                                                <a href="club/legacy/index.htm">Legacy</a></li>
                                            <li
                                                class="menu-item menu-item-type-post_type menu-item-object-club menu-item-178">
                                                <a href="club/foolianto/index.htm">Foolianto</a></li>
                                        </ul>
                                    </li>
                                    <li
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-180">
                                        <a href="#">English League</a>
                                        <ul class="sub-menu">
                                            <li
                                                class="menu-item menu-item-type-post_type menu-item-object-club menu-item-184">
                                                <a href="club/foolianto/index.htm">Foolianto</a></li>
                                            <li
                                                class="menu-item menu-item-type-post_type menu-item-object-club menu-item-182">
                                                <a href="club/real-m/index.htm">Real M.</a></li>
                                            <li
                                                class="menu-item menu-item-type-post_type menu-item-object-club menu-item-181">
                                                <a href="club/legacy-copy/index.htm">Legacy</a></li>
                                            <li
                                                class="menu-item menu-item-type-post_type menu-item-object-club menu-item-183">
                                                <a href="club/teamfoot/index.htm">Teamfoot</a></li>
                                            <li
                                                class="menu-item menu-item-type-post_type menu-item-object-club menu-item-185">
                                                <a href="club/legacy/index.htm">Legacy</a></li>
                                        </ul>
                                    </li>
                                    <li
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-186">
                                        <a href="#">France League</a>
                                        <ul class="sub-menu">
                                            <li
                                                class="menu-item menu-item-type-post_type menu-item-object-club menu-item-187">
                                                <a href="club/legacy-copy/index.htm">Legacy</a></li>
                                            <li
                                                class="menu-item menu-item-type-post_type menu-item-object-club menu-item-188">
                                                <a href="club/real-m/index.htm">Real M.</a></li>
                                            <li
                                                class="menu-item menu-item-type-post_type menu-item-object-club menu-item-189">
                                                <a href="club/teamfoot/index.htm">Teamfoot</a></li>
                                            <li
                                                class="menu-item menu-item-type-post_type menu-item-object-club menu-item-190">
                                                <a href="club/foolianto/index.htm">Foolianto</a></li>
                                            <li
                                                class="menu-item menu-item-type-post_type menu-item-object-club menu-item-191">
                                                <a href="club/legacy/index.htm">Legacy</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-195">
                                <a href="#">Fixture</a>
                                <ul class="sub-menu">
                                    <li
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-208">
                                        <a href="world-cup-fixture/index.htm">World Cup Fixture</a></li>
                                    <li
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-206">
                                        <a href="liga-bbva-fixture/index.htm">Liga BBVA Fixture</a></li>
                                    <li
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-205">
                                        <a href="english-premier-fixture/index.htm">English Premier Fixture</a>
                                    </li>
                                    <li
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-207">
                                        <a href="super-cup-fixture/index.htm">Super Cup Fixture</a></li>
                                </ul>
                            </li>
                            <li
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-209">
                                <a href="#">Results</a>
                                <ul class="sub-menu">
                                    <li
                                        class="menu-item menu-item-type-post_type menu-item-object-fixture_result menu-item-211">
                                        <a href="fixture_result/teamfoot-vs-legacy/index.htm">Teamfoot VS
                                            Legacy</a></li>
                                    <li
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-215">
                                        <a href="super-cup-result/index.htm">Super Cup Result</a></li>
                                    <li
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-216">
                                        <a href="world-cup-result/index.htm">World Cup Result</a></li>
                                    <li
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-219">
                                        <a href="liga-bbva-results/index.htm">Liga BBVA Results</a></li>
                                </ul>
                            </li>
                            <li
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-223">
                                <a href="#">Point Table</a>
                                <ul class="sub-menu">
                                    <li
                                        class="menu-item menu-item-type-post_type menu-item-object-point_table menu-item-224">
                                        <a href="point_table/super-cup-point-table/index.htm">Super Cup
                                            League</a></li>
                                    <li
                                        class="menu-item menu-item-type-post_type menu-item-object-point_table menu-item-225">
                                        <a href="point_table/liga-bbva-point-table/index.htm">Liga BBVA</a>
                                    </li>
                                    <li
                                        class="menu-item menu-item-type-post_type menu-item-object-point_table menu-item-226">
                                        <a href="point_table/english-premier-league/index.htm">English Premier
                                            League</a></li>
                                </ul>
                            </li>
                            <li
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-229">
                                <a href="sports/index.htm">Sports</a>
                                <ul class="sub-menu">
                                    <li
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-245">
                                        <a href="#">More Blog Pages</a>
                                        <ul class="sub-menu">
                                            <li
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-246">
                                                <a href="blog-right-sidebar/index.htm">Blog Right Sidebar</a>
                                            </li>
                                            <li
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-247">
                                                <a href="blog-left-sidebar/index.htm">Blog Left Sidebar</a>
                                            </li>
                                            <li
                                                class="menu-item menu-item-type-post_type menu-item-object-post menu-item-248">
                                                <a href="hello-world-copy-5-copy/index.htm">Blog details
                                                    Image</a></li>
                                            <li
                                                class="menu-item menu-item-type-post_type menu-item-object-post menu-item-249">
                                                <a href="sweden-and-germany-in-last-four/index.htm">Blog
                                                    details Video</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li
                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-329">
                                <a href="#">LOGIN</a>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!-- end of /. container -->
    </nav>
    <!-- End Navigation -->
    <!-- START MENU SECTION -->
    <nav class="navbar navbar-default bootsnav">
        <div class="container">
            <!-- Start Atribute Navigation -->
            <div class="attr-nav">
                <ul>
                    <li class="search">
                        <form action="https://webredox.net/demo/wp/sportsox/" method="post">
                            <input type="text" name="s" placeholder="Search">
                            <button><i class="fa fa-search"></i></button>
                        </form>
                    </li>
                </ul>
            </div><!-- end of /. header search button -->
            <!-- End Atribute Navigation -->

            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-left" data-in="zoomIn" data-out="zoomOut">
                    @foreach ($tournaments as $tournament)
                    <li id="menu-item-153"
                    class="menu-item menu-item-type-post_type menu-item-object-league menu-item-153"><a
                        href="{{ route('competition',$tournament->id)}}">{{$tournament->name}}</a></li>
                    @endforeach

                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- end of container -->
    </nav><!-- end of /. nav -->
</div><!-- end of /. nav area-->
<!-- End Navigation -->
