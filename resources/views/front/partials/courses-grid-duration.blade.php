<section class="courses-grid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="pre-featured">
                    <div class="info-text">
                        @if ($sorted_duration->currentPage())
                        <h4>showing {{ -2+(3*$sorted_duration->currentPage()) }}-{{ ($sorted_duration->currentPage()*3) }} of {{ $sorted_duration->total() }} courses</h4>
                        @endif
                    </div>
                    <div class="right-content">
                        <div class="input-select">
                            <select onchange="window.location.href=this.options[this.selectedIndex].value;" name="category" id="category">
                                <option value="-1">Select Category</option>
                                <option value="{{ route('courses-free', ) }}">Free</option>
                                <option value="{{ route('courses-newest' ) }}">Newest Course</option>
                                <option value="{{ route('courses-duration') }}">Duration</option>
                                <option value="{{ route('courses') }}">All</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($sorted_duration as $item)
            <div class="col-md-4">
                <div class="item course-item">
                    <a href="{{ route('course.single', $item->id) }}"><img src="{{ asset('assets/images/' . $item->bg) }}" alt=""></a>
                    <div class="down-content">
                        <img src="{{ asset('assets/images/' . $item->teacher_pic) }}" alt="">
                        <h6>{{ $item->teacher_name }}</h6>
                        <div class="{{  $item->price_class }}">
                            <span>${{ $item->price }}</span>
                            <div class="base"></div>
                        </div>
                        <a href="{{ route('course.single', [$item->id]) }}">
                            <h4>{!! $item->title !!}</h4>
                        </a>
                        <p>{{ $item->desc }}</p>
                        <div class="text-button">
                            <a href="{{ route('course.single', $item->id) }}">view more<i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            {{ $sorted_duration->links() }}

            {{-- <div class="col-md-4">
                <div class="item course-item">
                    <a href="single-course.html"><img src="{{ asset('assets/images/course-1.jpg') }}" alt=""></a>
                    <div class="down-content">
                        <img src="{{ asset('assets/images/teacher-12.jpg') }}" alt="">
                        <h6>Ernest Byrd</h6>
                        <div class="price-red">
                            <span>$19.99</span>
                            <div class="base"></div>
                        </div>
                        <a href="single-course.html">
                            <h4>How to become<br>a Powerful Speaker</h4>
                        </a>
                        <p>Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic Wes Anderson.
                        </p>
                        <div class="text-button">
                            <a href="single-course.html">view more<i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="item course-item">
                    <a href="single-course.html"><img src="{{ asset('assets/images/course-2.jpg') }}" alt=""></a>
                    <div class="down-content">
                        <img src="{{ asset('assets/images/teacher-2.jpg') }}" alt="">
                        <h6>Ernest Byrd</h6>
                        <div class="price-red">
                            <span>$49.99</span>
                            <div class="base"></div>
                        </div>
                        <a href="single-course.html">
                            <h4>Electrical &amp; Electronic <br>Engingering</h4>
                        </a>
                        <p>Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic Wes Anderson.
                        </p>
                        <div class="text-button">
                            <a href="single-course.html">view more<i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="item course-item">
                    <a href="single-course.html"><img src="{{ asset('assets/images/course-3.jpg') }}" alt=""></a>
                    <div class="down-content">
                        <img src="{{ asset('assets/images/teacher-4.jpg') }}" alt="">
                        <h6>Ernest Byrd</h6>
                        <div class="price-red">
                            <span>$19.99</span>
                            <div class="base"></div>
                        </div>
                        <a href="single-course.html">
                            <h4>How to become<br>a Powerful Speaker</h4>
                        </a>
                        <p>Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic Wes Anderson.
                        </p>
                        <div class="text-button">
                            <a href="single-course.html">view more<i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="item course-item">
                    <a href="single-course.html"><img src="{{ asset('assets/images/course-4.jpg') }}" alt=""></a>
                    <div class="down-content">
                        <img src="{{ asset('assets/images/teacher-7.jpg') }}" alt="">
                        <h6>Ernest Byrd</h6>
                        <div class="price-yellow">
                            <span>Free</span>
                            <div class="base"></div>
                        </div>
                        <a href="single-course.html">
                            <h4>What can you do<br>With a Business Degree?</h4>
                        </a>
                        <p>Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic Wes Anderson.
                        </p>
                        <div class="text-button">
                            <a href="single-course.html">view more<i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="item course-item">
                    <a href="single-course.html"><img src="{{ asset('assets/images/course-5.jpg') }}" alt=""></a>
                    <div class="down-content">
                        <img src="{{ asset('assets/images/teacher-12.jpg') }}" alt="">
                        <h6>Ernest Byrd</h6>
                        <div class="price-red">
                            <span>$29.99</span>
                            <div class="base"></div>
                        </div>
                        <a href="single-course.html">
                            <h4>Fashion buying<br>and Product Management</h4>
                        </a>
                        <p>Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic Wes Anderson.
                        </p>
                        <div class="text-button">
                            <a href="single-course.html">view more<i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="item course-item">
                    <a href="single-course.html"><img src="{{ asset('assets/images/course-6.jpg') }}" alt=""></a>
                    <div class="down-content">
                        <img src="{{ asset('assets/images/teacher-2.jpg') }}" alt="">
                        <h6>Ernest Byrd</h6>
                        <div class="price-red">
                            <span>$19.99</span>
                            <div class="base"></div>
                        </div>
                        <a href="single-course.html">
                            <h4>How to become<br>a Powerful Speaker</h4>
                        </a>
                        <p>Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic Wes Anderson.
                        </p>
                        <div class="text-button">
                            <a href="single-course.html">view more<i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="item course-item">
                    <a href="single-course.html"><img src="{{ asset('assets/images/course-7.jpg') }}" alt=""></a>
                    <div class="down-content">
                        <img src="{{ asset('assets/images/teacher-4.jpg') }}" alt="">
                        <h6>Ernest Byrd</h6>
                        <div class="price-yellow">
                            <span>Free</span>
                            <div class="base"></div>
                        </div>
                        <a href="single-course.html">
                            <h4>How to become<br>a Powerful Speaker</h4>
                        </a>
                        <p>Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic Wes Anderson.
                        </p>
                        <div class="text-button">
                            <a href="single-course.html">view more<i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="item course-item">
                    <a href="single-course.html"><img src="{{ asset('assets/images/course-8.jpg') }}" alt=""></a>
                    <div class="down-content">
                        <img src="{{ asset('assets/images/teacher-7.jpg') }}" alt="">
                        <h6>Ernest Byrd</h6>
                        <div class="price-yellow">
                            <span>Free</span>
                            <div class="base"></div>
                        </div>
                        <a href="single-course.html">
                            <h4>What can you do<br>With a Business Degree?</h4>
                        </a>
                        <p>Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic Wes Anderson.
                        </p>
                        <div class="text-button">
                            <a href="single-course.html">view more<i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="item course-item">
                    <a href="single-course.html"><img src="{{ asset('assets/images/course-9.jpg') }}"" alt=""></a>
                    <div class="  down-content">
                        <img src="{{ asset('assets/images/teacher-12.jpg') }}" alt="">
                        <h6>Ernest Byrd</h6>
                        <div class="price-red">
                            <span>$29.99</span>
                            <div class="base"></div>
                        </div>
                        <a href="single-course.html">
                            <h4>Fashion buying<br>and Product Management</h4>
                        </a>
                        <p>Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic Wes Anderson.
                        </p>
                        <div class="text-button">
                            <a href="single-course.html">view more<i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
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
</section>
