<section class="single-course">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="single-item">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="item course-item">
                                <div class="up-content">
                                    <a href="single-course.html"><h4>
                                        {!! $courses[0]->title !!}</h4></a>
                                    <p>Plaid you probably haven't heard of them fashion axe meditation</p>
                                    <img src="{{ asset('assets/images/' . $courses[0]->teacher_pic) }}" alt="">
                                    <h6>{{ $courses[0]->teacher_name }}</h6>
                                    <div class="{{ $courses[0]->price_class }}">
                                        <span>{{ $courses[0]->price }}</span>
                                        <div id="base"></div>
                                    </div>
                                </div>
                                <div class="courses-slider">
                                    <ul class="slides">
                                        <li data-thumb="{{ asset('assets/images/' . $courses[0]->bg) }}">
                                          <img src="{{ asset('assets/images/' . $courses[0]->bg) }}" alt="" />
                                        </li>
                                        <li data-thumb="{{ asset('assets/images/' . $courses[0]->bg) }}">
                                            <img src="{{ asset('assets/images/' . $courses[0]->bg) }}" alt="" />
                                          </li>
                                          <li data-thumb="{{ asset('assets/images/' . $courses[0]->bg) }}">
                                            <img src="{{ asset('assets/images/' . $courses[0]->bg) }}" alt="" />
                                          </li>
                                          <li data-thumb="{{ asset('assets/images/' . $courses[0]->bg) }}">
                                            <img src="{{ asset('assets/images/' . $courses[0]->bg) }}" alt="" />
                                          </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="description">
                                <h4>Description</h4>
                                <p>{!! $courses[0]->text !!}</p>
                            </div>
                            {{-- <div class="topics">
                                <h4>Topics Included</h4>
                                <div class="row">
                                    <div class="col-md-4">
                                        <ul>
                                            <li><i class="fa fa-check"></i>Ennui pickled asymmetrical</li>
                                            <li><i class="fa fa-check"></i>Kitsch keffiyeh crucifix ennui</li>
                                            <li><i class="fa fa-check"></i>Quinoa dreamcatcher food</li>
                                            <li><i class="fa fa-check"></i>Truck skateboard selvage bear</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <ul>
                                            <li><i class="fa fa-check"></i>Fitsch keffiyeh crucifix ennui</li>
                                            <li><i class="fa fa-check"></i>Ennui pickled asymmetrical</li>
                                            <li><i class="fa fa-check"></i>Quinoa dreamcatcher food</li>
                                            <li><i class="fa fa-check"></i>Truck skateboard selvage bear</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4">
                                        <ul>
                                            <li><i class="fa fa-check"></i>Ennui pickled asymmetrical</li>
                                            <li><i class="fa fa-check"></i>Truck skateboard selvage bear</li>
                                        </ul>
                                    </div>
                                </div>
                            </div> --}}

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="course-information">
                    <div class="widget-heading">
                        <h4>Course Information</h4>
                    </div>
                    <ul>
                        <li><span>Starts:</span>{{ $courses[0]->starting_date }}</li>
                        <li><span>Duration:</span>{{ $courses[0]->months }} Month / {{ $courses[0]->weeks }} Weeks</li>
                        <li><span>Study Level:</span>{{ $courses[0]->study_level }}</li>
                        <li><span>Disipline</span>{{ $courses[0]->discipline }}</li>
                        <li><span>Price:</span>${{ $courses[0]->price }} / month</li>
                    </ul>
                </div>

                <div class="categories">
                    <div class="widget-heading">
                        <h4>Categories</h4>
                    </div>
                    <ul>
                        <li><a href="#"><i class="fa fa-angle-right"></i>Design</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i>International</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i>Learning</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i>Read</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i>Education</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i>Finance</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
