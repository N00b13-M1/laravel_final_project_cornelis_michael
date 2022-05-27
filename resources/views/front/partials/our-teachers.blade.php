<section class="our-teachers">
    <div class="container">
        <div class="row">
            <div class="section-heading text-center">
                <h1>Our Teachers</h1>
                <img src="{{ asset('assets/images/line-dec.png') }}" alt="">
                <p>High Life squid literally scenester fap Helvetica quinoa church-key</p>
            </div>
        </div>

        <div class="row">
            @foreach ($teachers as $item)
            <div class="col-md-3 col-sm-6">
                <div class="teacher-item">
                    <div class="thumb-holder">
                        <a href="{{ $item->url }}"><img src="{{ asset('assets/images/' . $item->professor_photo) }}" alt=""></a>
                        <div class="hover-content">
                            <ul>
                                <li><a href="{{ $item->facebook_id }}"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="{{ $item->twitter_id }}"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="{{ $item->dribble_id }}"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="{{ $item->linkedin_id }}"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="down-content">
                        <a href="{{ $item->url }}"><h4>{{ $item->professor_name }}</h4></a>
                        <span>{{ $item->professor_title }}</span>
                        <p>{{ $item->text1 }}</p>
                    </div>
                </div>
            </div>
            @endforeach
            {{ $teachers->links() }}

            {{-- <div class="col-md-3 col-sm-6">
                <div class="teacher-item">
                    <div class="thumb-holder">
                        <a href="single-teacher.html"><img src="{{ asset('assets/images/teacher-12.jpg') }}" alt=""></a>
                        <div class="hover-content">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="down-content">
                        <a href="single-teacher.html"><h4>Nick Smith</h4></a>
                        <span>Physic Teacher</span>
                        <p>Ugh chambray lumbersexual food  artisan meditation sartorial well post-ironic wes</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="teacher-item">
                    <div class="thumb-holder">
                        <a href="single-teacher.html"><img src="{{ asset('assets/images/teacher-2.jpg') }}" alt=""></a>
                        <div class="hover-content">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="down-content">
                        <a href="single-teacher.html"><h4>John Rosado</h4></a>
                        <span>English Teacher</span>
                        <p>Ugh chambray lumbersexual food  artisan meditation sartorial well post-ironic wes</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="teacher-item">
                    <div class="thumb-holder">
                        <a href="single-teacher.html"><img src="{{ asset('assets/images/teacher-4.jpg') }}" alt=""></a>
                        <div class="hover-content">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="down-content">
                        <a href="single-teacher.html"><h4>Maria Lehmann</h4></a>
                        <span>Design Teacher</span>
                        <p>Ugh chambray lumbersexual food  artisan meditation sartorial well post-ironic wes</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="teacher-item">
                    <div class="thumb-holder">
                        <a href="single-teacher.html"><img src="{{ asset('assets/images/teacher-7.jpg') }}" alt=""></a>
                        <div class="hover-content">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="down-content">
                        <a href="single-teacher.html"><h4>Samuel Delossantos</h4></a>
                        <span>Math Teacher</span>
                        <p>Ugh chambray lumbersexual food  artisan meditation sartorial well post-ironic wes</p>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</section>
