<section class="teachers-page">
    <div class="container">
        <div class="row">
            @foreach ( $professors as $item )
            <div class="col-md-3">
                <div class="teacher-item">
                    <img src="{{ asset('assets/images/' . $item->professor_photo) }}" alt="">
                    <div class="down-content">
                        <a href="{{ route('professor.single', $item->id ) }}"><h4>{{ $item->professor_name }}</h4></a>
                        <span>{{ $item->professor_title }}</span>
                        <p>{{ $item->text1 }}</p>
                        <ul>
                            <li><a href="{{ url('http://www.facebook.com/' . $item->facebook_id) }}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="{{ url('http://www.twitter.com/' .$item->twitter_id) }}" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="{{ url('http://www.dribble.com/' . $item->dribble_id) }}" target="_blank"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="{{ url('http://www.linkedin.com/' . $item->linkedin_id) }}" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
            {{ $professors->links() }}
            {{-- <div class="col-md-3">
                <div class="teacher-item">
                    <img src="{{ asset('assets/images/teacher-1.jpg') }}" alt="">
                    <div class="down-content">
                        <a href="single-teacher.html"><h4>Samuel Delossantos</h4></a>
                        <span>Math Teacher</span>
                        <p>Ugh chambray lumbersexual food artisan meditation sartorial post ironic fans wes</p>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="teacher-item">
                    <img src="{{ asset('assets/images/teacher-2.jpg') }}" alt="">
                    <div class="down-content">
                        <a href="single-teacher.html"><h4>Nick Smith</h4></a>
                        <span>Physic Teacher</span>
                        <p>Ugh chambray lumbersexual food artisan meditation sartorial post ironic fans wes</p>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="teacher-item">
                    <img src="{{ asset('assets/images/teacher-3.jpg') }}" alt="">
                    <div class="down-content">
                        <a href="single-teacher.html"><h4>John Rosado</h4></a>
                        <span>English Teacher</span>
                        <p>Ugh chambray lumbersexual food artisan meditation sartorial post ironic fans wes</p>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="teacher-item">
                    <img src="{{ asset('assets/images/teacher-4.jpg') }}" alt="">
                    <div class="down-content">
                        <a href="single-teacher.html"><h4>Maria Lehmann</h4></a>
                        <span>Design Teacher</span>
                        <p>Ugh chambray lumbersexual food artisan meditation sartorial post ironic fans wes</p>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="teacher-item">
                    <img src="{{ asset('assets/images/teacher-5.jpg') }}" alt="">
                    <div class="down-content">
                        <a href="single-teacher.html"><h4>Samuel Delossantos</h4></a>
                        <span>Math Teacher</span>
                        <p>Ugh chambray lumbersexual food artisan meditation sartorial post ironic fans wes</p>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="teacher-item">
                    <img src="{{ asset('assets/images/teacher-6.jpg') }}" alt="">
                    <div class="down-content">
                        <a href="single-teacher.html"><h4>John Rosado</h4></a>
                        <span>English Teacher</span>
                        <p>Ugh chambray lumbersexual food artisan meditation sartorial post ironic fans wes</p>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="teacher-item">
                    <img src="{{ asset('assets/images/teacher-7.jpg') }}" alt="">
                    <div class="down-content">
                        <a href="single-teacher.html"><h4>Samuel Delossantos</h4></a>
                        <span>Math Teacher</span>
                        <p>Ugh chambray lumbersexual food artisan meditation sartorial post ironic fans wes</p>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="teacher-item">
                    <img src="{{ asset('assets/images/teacher-8.jpg') }}" alt="">
                    <div class="down-content">
                        <a href="single-teacher.html"><h4>Maria Lehmann</h4></a>
                        <span>Design Teacher</span>
                        <p>Ugh chambray lumbersexual food artisan meditation sartorial post ironic fans wes</p>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="teacher-item">
                    <img src="{{ asset('assets/images/teacher-9.jpg') }}" alt="">
                    <div class="down-content">
                        <a href="single-teacher.html"><h4>Samuel Delossantos</h4></a>
                        <span>Math Teacher</span>
                        <p>Ugh chambray lumbersexual food artisan meditation sartorial post ironic fans wes</p>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="teacher-item">
                    <img src="{{ asset('assets/images/teacher-10.jpg') }}" alt="">
                    <div class="down-content">
                        <a href="single-teacher.html"><h4>Maria Lehmann</h4></a>
                        <span>Design Teacher</span>
                        <p>Ugh chambray lumbersexual food artisan meditation sartorial post ironic fans wes</p>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="teacher-item">
                    <img src="{{ asset('assets/images/teacher-11.jpg') }}" alt="">
                    <div class="down-content">
                        <a href="single-teacher.html"><h4>Samuel Delossantos</h4></a>
                        <span>Math Teacher</span>
                        <p>Ugh chambray lumbersexual food artisan meditation sartorial post ironic fans wes</p>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="teacher-item">
                    <img src="{{ asset('assets/images/teacher-12.jpg') }}" alt="">
                    <div class="down-content">
                        <a href="single-teacher.html"><h4>Nick Smith</h4></a>
                        <span>Physic Teacher</span>
                        <p>Ugh chambray lumbersexual food artisan meditation sartorial post ironic fans wes</p>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div> --}}
        </div>
        {{-- <div class="row">
            <div class="col-md-12">
                <div class="pagination-navigation">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="pagination">
                                <ul>
                                    <li><a href="#">1</a></li>
                                    <li class="active"><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
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


