<section class="testimonials-news">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="section-heading">
                    <h1>What Our Students Say</h1>
                    <img src="{{ asset('assets/images/line-dec.png') }}" alt="">
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div id="owl-testimonials">
                            <div class="item">
                                <i class="fa fa-quote-right"></i>
                                <p>Stumptown polaroid skateboard single-origin coffee. Farm-to-table Vice authentic Truffaut put a bird on it, pug ethical tousled photo booth gluten-free cliche bicycle rights four dollar toast single-origin coffee taxidermy.</p>
                                <img src="{{ asset('assets/images/teacher-2.jpg') }}" alt="">
                                <h4>Caroll m. davis</h4>
                                <span>Web Designer</span>
                            </div>
                            <div class="item">
                                <i class="fa fa-quote-right"></i>
                                <p>Stumptown polaroid skateboard single-origin coffee. Farm-to-table Vice authentic Truffaut put a bird on it, pug ethical tousled photo booth gluten-free cliche bicycle rights four dollar toast single-origin coffee taxidermy.</p>
                                <img src="{{ asset('assets/images/teacher-4.jpg') }}" alt="">
                                <h4>Peter j. smith</h4>
                                <span>Web Designer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="section-heading university-news">
                    <h1>University News</h1>
                    <img src="{{ asset('assets/images/line-dec.png') }}" alt="">
                </div>
                <div class="row">
                    <div class="col-md-12">
                        @for ($i=0 ; $i < 2 ; $i++)
                            <div class="news-item">
                                <a href="{{ $news[$i]->url }}"><img class="news" src="{{ asset('assets/images/' . $news[$i]->img) }}" alt=""></a>
                                <ul>
                                    <li>{{ $news[$i]->created_when }}</li>
                                    <li>By {{ $news[$i]->posted_by }}</li>
                                    <li>{{ $news[$i]->number_of_comments }} Comments</li>
                                </ul>
                                <a href="{{ $news[$i]->url }}"><h4>{{ $news[$i]->title }}</h4></a>
                                <p>{!! (Str::words($news[$i]->text1, '12')) !!}</p>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
