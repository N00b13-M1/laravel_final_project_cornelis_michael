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
            {{-- @for ($i = 0; $i < ($teachers->count()-8) ; $i++)
            <div class="col-md-3 col-sm-6">
                <div class="teacher-item">
                    <div class="thumb-holder">
                        <a href="{{ $teachers[$i]->url }}"><img src="{{ asset('assets/images/' . $teachers[$i]->professor_photo) }}" alt=""></a>
                        <div class="hover-content">
                            <ul>
                                <li><a href="{{ $teachers[$i]->facebook_id }}"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="{{ $teachers[$i]->twitter_id }}"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="{{ $teachers[$i]->dribble_id }}"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="{{ $teachers[$i]->linkedin_id }}"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="down-content">
                        <a href="{{ $teachers[$i]->url }}"><h4>{{ $teachers[$i]->professor_name }}</h4></a>
                        <span>{{ $teachers[$i]->professor_title }}</span>
                        <p>{{ $teachers[$i]->text1 }}</p>
                    </div>
                </div>
            </div>
            @endfor --}}
    
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

            {{-- @for($i=1; $i < 4; $i+=3)
                <p>{{ $i }}</p>
                @for ()

                @endfor
                // 1
                // 4+3
                // 5+1
                // 8+3
                // 9+1
                // 12+3
            @endfor --}}
            {{-- @php
                $i=1;
                if ($i % 2 != 0) {
                    for($i=1; $i < 4; $i+=3){
                        <p>"test"</p>
                    }
                }
                else {
                    dd($i+2);
                }
            @endphp --}}











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
