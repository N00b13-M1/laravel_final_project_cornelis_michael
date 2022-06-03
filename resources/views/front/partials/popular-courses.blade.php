<section class="popular-courses">
    <div class="container">
        <div class="row">
            <div class="section-heading text-center">
                <h1>Popular Courses</h1>
                <img src="{{ asset('assets/images/line-dec.png') }}" alt="">
                <p>Twee Vice synth stumptown distillery aesthetic slow carb</p>
            </div>
        </div>
        <div class="row">
            <div id="owl-courses">
                @foreach ( $favorites as $item )
                <div class="item course-item">
                    <a href="{{ $item->url }}"><img src="{{ asset('assets/images/' . $item->bg) }}" alt=""></a>
                    <div class="down-content">
                        <img src="{{ asset('assets/images/' . $item->teacher_pic) }}" alt="">
                        <h6>{{  $item->teacher_name }}</h6>
                        <div class="{{ $item->price_class }}">
                            <span>${{ $item->price }}</span>
                            <div class="base"></div>
                        </div>
                        <a href="{{ route('course.single', [$item->id]) }}"><h4>{!! $item->title !!}</h4></a>
                        <p>{{ $item->desc }}</p>
                        <div class="text-button">
                            <a href="{{ route('course.single', [$item->id]) }}">view more<i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
                {{-- <div class="item course-item">
                    <a href="single-course.html"><img src="{{ asset('assets/images/course-2.jpg') }} " alt=""></a>
                    <div class="down-content">
                        <img src="{{ asset('assets/images/teacher-2.jpg') }}" alt="">
                        <h6>Ernest Byrd</h6>
                        <div class="price-red">
                            <span>$49.99</span>
                            <div class="base"></div>
                        </div>
                        <a href="single-course.html"><h4>Electrical &amp; Electronic <br>Engingering</h4></a>
                        <p>Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic Wes Anderson.</p>
                        <div class="text-button">
                            <a href="single-course.html">view more<i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item course-item">
                    <a href="single-course.html"><img src="{{ asset('assets/images/course-3.jpg') }}" alt=""></a>
                    <div class="down-content">
                        <img src="{{ asset('assets/images/teacher-4.jpg') }}" alt="">
                        <h6>Ernest Byrd</h6>
                        <div class="price-red">
                            <span>$19.99</span>
                            <div class="base"></div>
                        </div>
                        <a href="single-course.html"><h4>How to become<br>a Powerful Speaker</h4></a>
                        <p>Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic Wes Anderson.</p>
                        <div class="text-button">
                            <a href="single-course.html">view more<i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item course-item">
                    <a href="single-course.html"><img src="{{ asset('assets/images/course-4.jpg') }}" alt=""></a>
                    <div class="down-content">
                        <img src="{{ asset('assets/images/teacher-7.jpg') }}" alt="">
                        <h6>Ernest Byrd</h6>
                        <div class="price-yellow">
                            <span>Free</span>
                            <div class="base"></div>
                        </div>
                        <a href="single-course.html"><h4>What can you do<br>With a Business Degree?</h4></a>
                        <p>Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic Wes Anderson.</p>
                        <div class="text-button">
                            <a href="single-course.html">view more<i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item course-item">
                    <a href="single-course.html"><img src="{{ asset('assets/images/course-5.jpg') }}" alt=""></a>
                    <div class="down-content">
                        <img src="{{ asset('assets/images/teacher-12.jpg') }}" alt="">
                        <h6>Ernest Byrd</h6>
                        <div class="price-red">
                            <span>$29.99</span>
                            <div class="base"></div>
                        </div>
                        <a href="single-course.html"><h4>Fashion buying<br>and Product Management</h4></a>
                        <p>Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic Wes Anderson.</p>
                        <div class="text-button">
                            <a href="single-course.html">view more<i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item course-item">
                    <a href="single-course.html"><img src="{{ asset('assets/images/course-6.jpg') }}" alt=""></a>
                    <div class="down-content">
                        <img src="{{ asset('assets/images/teacher-2.jpg') }}" alt="">
                        <h6>Ernest Byrd</h6>
                        <div class="price-red">
                            <span>$19.99</span>
                            <div class="base"></div>
                        </div>
                        <a href="single-course.html"><h4>How to become<br>a Powerful Speaker</h4></a>
                        <p>Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic Wes Anderson.</p>
                        <div class="text-button">
                            <a href="single-course.html">view more<i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item course-item">
                    <a href="single-course.html"><img src="{{ asset('assets/images/course-7.jpg') }}" alt=""></a>
                    <div class="down-content">
                        <img src="{{ asset('assets/images/teacher-4.jpg') }}" alt="">
                        <h6>Ernest Byrd</h6>
                        <div class="price-yellow">
                            <span>Free</span>
                            <div class="base"></div>
                        </div>
                        <a href="single-course.html"><h4>How to become<br>a Powerful Speaker</h4></a>
                        <p>Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic Wes Anderson.</p>
                        <div class="text-button">
                            <a href="single-course.html">view more<i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item course-item">
                    <a href="single-course.html"><img src="{{ asset('assets/images/course-8.jpg') }}" alt=""></a>
                    <div class="down-content">
                        <img src="{{ asset('assets/images/teacher-7.jpg') }}" alt="">
                        <h6>Ernest Byrd</h6>
                        <div class="price-yellow">
                            <span>Free</span>
                            <div class="base"></div>
                        </div>
                        <a href="single-course.html"><h4>What can you do<br>With a Business Degree?</h4></a>
                        <p>Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic Wes Anderson.</p>
                        <div class="text-button">
                            <a href="single-course.html">view more<i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item course-item">
                    <a href="single-course.html"><img src="{{ asset('assets/images/course-9.jpg') }}" alt=""></a>
                    <div class="down-content">
                        <img src="{{ asset('assets/images/teacher-12.jpg') }}" alt="">
                        <h6>Ernest Byrd</h6>
                        <div class="price-red">
                            <span>$29.99</span>
                            <div class="base"></div>
                        </div>
                        <a href="single-course.html"><h4>Fashion buying<br>and Product Management</h4></a>
                        <p>Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic Wes Anderson.</p>
                        <div class="text-button">
                            <a href="single-course.html">view more<i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</section>
