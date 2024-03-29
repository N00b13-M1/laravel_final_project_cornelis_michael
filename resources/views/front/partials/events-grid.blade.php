<section class="events-grid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="pre-featured">
                    <div class="info-text">
                        @if ($events->currentPage())
                        <h4>showing {{ -2+(3*$events->currentPage()) }}-{{ ($events->currentPage()*3) }} of {{ $events->total() }} events</h4>
                        @endif
                    </div>
                    <div class="right-content">
                        <div class="input-select">
                            <select onchange="window.location.href=this.options[this.selectedIndex].value;" name="mark" id="mark">
                                <option value="-1">Select Category</option>
                                <option value="{{ route('events-likes' ) }}">Likes</option>
                                <option value="{{ route('events-location' ) }}">Location</option>
                                <option value="{{ route('events-stars') }}">Stars</option>
                                <option value="{{ route('events') }}">All</option>
                            </select>
                        </div>
                    </div>
                    {{-- <div>
                        <ul>
                            <li><a href="#search"><i class="fa fa-search"></i></a></li>
                        </ul>
                    </div> --}}
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($events as $item)
            <div class="col-md-4">
                <div class="event-item">
                    <div class="thumb-holder">
                        <img src="{{ asset('assets/images/' . $item->img ) }}" alt="">
                        <div class="hover-content">
                            <ul>
                                @for ($i=$item->stars ;$i >0 ; $i--)
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>

                                @endfor
                                <li><a href="#">{{ $item->stars }} stars</a></li>
                                <li><a href="#"><i class="fa fa-thumbs-up"></i>{{ $item->likes }}</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="down-content">
                        <ul>
                            <li><i class="fa fa-map-marker"></i>{!! $item->where !!}</li>
                            <li><i class="fa fa-clock-o"></i>{!! $item->when !!}</li>
                        </ul>
                        <div class="date">
                            <p>{!! $item->circle_txt !!}</p>
                        </div>
                        <a href="{{ route('professor.single', $item->id ) }}">
                            <h4>{!!  $item->event_name !!}</h4>
                        </a>
                        <p>{{ $item->event_desc }}</p>
                    </div>
                </div>
            </div>
            @endforeach
            {{ $events->links() }}
            {{-- <div class="col-md-4">
                <div class="event-item">
                    <div class="thumb-holder">
                        <img src="{{ asset('assets/images/events-1.jpg') }}" alt="">
                        <div class="hover-content">
                            <ul>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#">5 stars</a></li>
                                <li><a href="#"><i class="fa fa-thumbs-up"></i>68</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="down-content">
                        <ul>
                            <li><i class="fa fa-map-marker"></i>Johnny Lane<br>Milwaukee WI 532</li>
                            <li><i class="fa fa-clock-o"></i>Dec 18 - Dec 28<br>Monday 8am - 12am</li>
                        </ul>
                        <div class="date">
                            <p>18<span>Dec</span></p>
                        </div>
                        <a href="single-teacher.html">
                            <h4>The name of a great<br>band</h4>
                        </a>
                        <p>Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic Wes Anderson fap
                            tattooed.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="event-item">
                    <div class="thumb-holder">
                        <img src="{{ asset('assets/images/events-2.jpg') }}" alt="">
                        <div class="hover-content">
                            <ul>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#">5 stars</a></li>
                                <li><a href="#"><i class="fa fa-thumbs-up"></i>68</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="down-content">
                        <ul>
                            <li><i class="fa fa-map-marker"></i>Johnny Lane<br>Milwaukee WI 532</li>
                            <li><i class="fa fa-clock-o"></i>Dec 18 - Dec 28<br>Monday 8am - 12am</li>
                        </ul>
                        <div class="date">
                            <p>18<span>Dec</span></p>
                        </div>
                        <a href="single-teacher.html">
                            <h4>Building Blocks – York’s<br>Pension Plan</h4>
                        </a>
                        <p>Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic Wes Anderson fap
                            tattooed.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="event-item">
                    <div class="thumb-holder">
                        <img src="{{ asset('assets/images/events-3.jpg') }}" alt="">
                        <div class="hover-content">
                            <ul>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#">5 stars</a></li>
                                <li><a href="#"><i class="fa fa-thumbs-up"></i>68</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="down-content">
                        <ul>
                            <li><i class="fa fa-map-marker"></i>Johnny Lane<br>Milwaukee WI 532</li>
                            <li><i class="fa fa-clock-o"></i>Dec 18 - Dec 28<br>Monday 8am - 12am</li>
                        </ul>
                        <div class="date">
                            <p>18<span>Dec</span></p>
                        </div>
                        <a href="single-teacher.html">
                            <h4>Filming Objects And<br>Sculpture</h4>
                        </a>
                        <p>Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic Wes Anderson fap
                            tattooed.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="event-item">
                    <div class="thumb-holder">
                        <img src="{{ asset('assets/images/events-4.jpg') }}" alt="">
                        <div class="hover-content">
                            <ul>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#">5 stars</a></li>
                                <li><a href="#"><i class="fa fa-thumbs-up"></i>68</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="down-content">
                        <ul>
                            <li><i class="fa fa-map-marker"></i>Johnny Lane<br>Milwaukee WI 532</li>
                            <li><i class="fa fa-clock-o"></i>Dec 18 - Dec 28<br>Monday 8am - 12am</li>
                        </ul>
                        <div class="date">
                            <p>18<span>Dec</span></p>
                        </div>
                        <a href="single-teacher.html">
                            <h4>Filming Objects And<br>Projects</h4>
                        </a>
                        <p>Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic Wes Anderson fap
                            tattooed.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="event-item">
                    <div class="thumb-holder">
                        <img src="{{ asset('assets/images/events-5.jpg') }}" alt="">
                        <div class="hover-content">
                            <ul>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#">5 stars</a></li>
                                <li><a href="#"><i class="fa fa-thumbs-up"></i>68</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="down-content">
                        <ul>
                            <li><i class="fa fa-map-marker"></i>Johnny Lane<br>Milwaukee WI 532</li>
                            <li><i class="fa fa-clock-o"></i>Dec 18 - Dec 28<br>Monday 8am - 12am</li>
                        </ul>
                        <div class="date">
                            <p>18<span>Dec</span></p>
                        </div>
                        <a href="single-teacher.html">
                            <h4>Public and Patient Involvment<br>Health Research</h4>
                        </a>
                        <p>Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic Wes Anderson fap
                            tattooed.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="event-item">
                    <div class="thumb-holder">
                        <img src="{{ asset('assets/images/events-6.jpg') }}" alt="">
                        <div class="hover-content">
                            <ul>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#">5 stars</a></li>
                                <li><a href="#"><i class="fa fa-thumbs-up"></i>68</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="down-content">
                        <ul>
                            <li><i class="fa fa-map-marker"></i>Johnny Lane<br>Milwaukee WI 532</li>
                            <li><i class="fa fa-clock-o"></i>Dec 18 - Dec 28<br>Monday 8am - 12am</li>
                        </ul>
                        <div class="date">
                            <p>18<span>Dec</span></p>
                        </div>
                        <a href="single-teacher.html">
                            <h4>Balancing Economic and<br>transformation</h4>
                        </a>
                        <p>Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic Wes Anderson fap
                            tattooed.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="event-item">
                    <div class="thumb-holder">
                        <img src="{{ asset('assets/images/events-7.jpg') }}" alt="">
                        <div class="hover-content">
                            <ul>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#">5 stars</a></li>
                                <li><a href="#"><i class="fa fa-thumbs-up"></i>68</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="down-content">
                        <ul>
                            <li><i class="fa fa-map-marker"></i>Johnny Lane<br>Milwaukee WI 532</li>
                            <li><i class="fa fa-clock-o"></i>Dec 18 - Dec 28<br>Monday 8am - 12am</li>
                        </ul>
                        <div class="date">
                            <p>18<span>Dec</span></p>
                        </div>
                        <a href="single-teacher.html">
                            <h4>Suad Amiry and Susan Abulhawa<br>in corvesation</h4>
                        </a>
                        <p>Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic Wes Anderson fap
                            tattooed.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="event-item">
                    <div class="thumb-holder">
                        <img src="{{ asset('assets/images/events-8.jpg') }}" alt="">
                        <div class="hover-content">
                            <ul>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#">5 stars</a></li>
                                <li><a href="#"><i class="fa fa-thumbs-up"></i>68</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="down-content">
                        <ul>
                            <li><i class="fa fa-map-marker"></i>Johnny Lane<br>Milwaukee WI 532</li>
                            <li><i class="fa fa-clock-o"></i>Dec 18 - Dec 28<br>Monday 8am - 12am</li>
                        </ul>
                        <div class="date">
                            <p>18<span>Dec</span></p>
                        </div>
                        <a href="single-teacher.html">
                            <h4>Flu Shots for Employees:<br>Manhattanville</h4>
                        </a>
                        <p>Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic Wes Anderson fap
                            tattooed.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="event-item">
                    <div class="thumb-holder">
                        <img src="{{ asset('assets/images/events-9.jpg') }}" alt="">
                        <div class="hover-content">
                            <ul>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#">5 stars</a></li>
                                <li><a href="#"><i class="fa fa-thumbs-up"></i>68</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="down-content">
                        <ul>
                            <li><i class="fa fa-map-marker"></i>Johnny Lane<br>Milwaukee WI 532</li>
                            <li><i class="fa fa-clock-o"></i>Dec 18 - Dec 28<br>Monday 8am - 12am</li>
                        </ul>
                        <div class="date">
                            <p>18<span>Dec</span></p>
                        </div>
                        <a href="single-teacher.html">
                            <h4>The Healthy Dancer Balance<br>On &amp; Off stage</h4>
                        </a>
                        <p>Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic Wes Anderson fap
                            tattooed.</p>
                    </div>
                </div>
            </div> --}}
        </div>
        {{-- <div class="row">
            <div class="col-md-12">
                <div class="pagination-navigation">
                    <div class="row">
                        <div class="col-md-6 col-xs-6">
                            <div class="pagination">
                                <ul>
                                    <li><a href="#">1</a></li>
                                    <li class="active"><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-6">
                            <div class="navigation">
                                <ul>
                                    <li><a href="#"><i class="fa fa-arrow-left"></i></a></li>
                                    <li><a href="#"><i class="fa fa-arrow-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
</section>
