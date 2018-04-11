<div class="row transparent-menu">
    <div class="container clear-padding">
        <!-- BEGIN: HEADER -->
        <div class="navbar-wrapper">
            <div class="navbar navbar-default" role="navigation">
                <!-- BEGIN: NAV-CONTAINER -->
                <div class="nav-container">
                    <div class="navbar-header">
                        <!-- BEGIN: TOGGLE BUTTON (RESPONSIVE)-->
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <!-- BEGIN: LOGO -->
                        <a class="navbar-brand logo" href="{{ url('/') }}">CRUISE</a>
                    </div>

                    <!-- BEGIN: NAVIGATION -->
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a class="dropdown-toggle" href="{{ url('/') }}" data-toggle="dropdown"><i class="fa fa-home"></i> HOME </a>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="fa fa-plane"></i> FLIGHTS <i class="fa fa-caret-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ url('flight/search_results') }}"> Search Results</a></li>
                                    {{--<li><a href="index-2.html"> Itinerary Details</a></li>--}}
                                    <li><a href="{{ url('flight/itinerary_booking') }}"> Itinerary Booking</a></li>
                                    <li><a href="{{ url('flight/payment_option') }}">Flight Payment Options</a></li>
                                    <li><a href="{{ url('flight/payment_confirmation') }}">Flight Payment Confirmation</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="fa fa-bed"></i> HOTELS <i class="fa fa-caret-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ url('hotel/search_results') }}"> Search Results</a></li>
                                    <li><a href="{{ url('hotel/hotel_details') }}"> Hotel Details</a></li>
                                    <li><a href="{{ url('hotel/hotel_room_details') }}"> Hotel Room Details</a></li>
                                    <li><a href="{{ url('hotel/hotel_booking') }}"> Hotel Booking</a></li>
                                    <li><a href="{{ url('hotel/hotel_payment_option') }}">Hotel Payment Options</a></li>
                                    <li><a href="{{ url('hotel/hotel_payment_confirmation') }}">Hotel Payment Confirmation</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="fa fa-suitcase"></i> PACKAGES <i class="fa fa-caret-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ url('package/package_list') }}"> Package List</a></li>
                                    <li><a href="{{ url('package/package_details') }}"> Package Details</a></li>
                                    <li><a href="{{ url('package/package_payment_option') }}"> Package Payment Options</a></li>
                                    <li><a href="{{ url('package/package_payment_confirmation') }}"> Package Payment Confirmation</a></li>
                                </ul>
                            </li>
                            {{--<li class="dropdown">--}}
                                {{--<a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="fa fa-suitcase"></i> TOURS <i class="fa fa-caret-down"></i></a>--}}
                                {{--<ul class="dropdown-menu">--}}
                                    {{--<li><a href="#"> HOME STYLE 1</a></li>--}}
                                    {{--<li><a href="#"> HOME STYLE 2</a></li>--}}
                                    {{--<li><a href="#"> HOME STYLE 3</a></li>--}}
                                    {{--<li><a href="#"> HOME STYLE 4</a></li>--}}
                                    {{--<li><a href="#"> HOME STYLE 5</a></li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                            <li class="dropdown mega">
                                <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="fa fa-taxi"></i> LOGIN </a>
                            </li>
                            <li class="dropdown mega">
                                <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="fa fa-ship"></i> BOOKINGS </a>
                            </li>
                            <li class="dropdown mega">
                                <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="fa fa-file"></i> SETTINGS </a>
                            </li>
                        </ul>
                    </div>
                    <!-- END: NAVIGATION -->
                </div>
                <!--END: NAV-CONTAINER -->
            </div>
        </div>
        <!-- END: HEADER -->
    </div>
</div>