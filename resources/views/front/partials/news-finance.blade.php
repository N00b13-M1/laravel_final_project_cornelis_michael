<section class="classic-news">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="classic-posts">
                    @foreach ($news_finance as $item )
                    <div class="classic-item">

                        <a href="{{ route("news.single", $item->id) }}"><img src="{{ asset('assets/images/' . $item->img) }}" alt=""></a>
                        <ul>
                            <li>Posted: <em>{{ $item->created_when }}</em></li>
                            <li>By: <em>{{ $item->posted_by }}</em></li>
                            <li>Comments: <em>{{ $item->number_of_comments }}</em></li>
                        </ul>
                        <a href="{{ route("news.single", $item->id) }}">
                            <h4>{{ $item->title }}</h4>
                        </a>
                        <p>{{ $item->text1 }}</p>
                        <div class="buttons">
                            <div class="accent-button">
                                <a href="{{ route("news.single", $item->id) }}">Continue Reading</a>
                            </div>
                            <div class="second-button">
                                <a href="#">Share <i class="fa fa-share-alt"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{-- {{ $news->links() }} --}}
                    {{-- <div class="classic-item">
                        <a href="single-post.html"><img src="{{ asset('assets/images/news-classic-6.jpg') }}" alt=""></a>
                        <ul>
                            <li>Posted: <em>7 Oct 2015</em></li>
                            <li>By: <em>Admin</em></li>
                            <li>Comments: <em>2</em></li>
                        </ul>
                        <a href="single-post.html">
                            <h4>New University Finder: Compare</h4>
                        </a>
                        <p>Church-key ugh sriracha slow-carb, +1 you probably haven't heard of them put a bird on it
                            single-origin coffee. Pork belly irony chia, fann pack taxidermy Intelligentsia Pitchfork
                            cliche tote bag stumptown authentic umami asymetrical. Bitters rof party fanny pack, street
                            art you probably haven't heard of them Echo Park disrupt.</p>
                        <div class="buttons">
                            <div class="accent-button">
                                <a href="single-post.html">Continue Reading</a>
                            </div>
                            <div class="second-button">
                                <a href="#">Share <i class="fa fa-share-alt"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="classic-item">
                        <a href="single-post.html"><img src="{{ asset('assets/images/news-classic-5.jpg') }}" alt=""></a>
                        <ul>
                            <li>Posted: <em>7 Oct 2015</em></li>
                            <li>By: <em>Admin</em></li>
                            <li>Comments: <em>2</em></li>
                        </ul>
                        <a href="single-post.html">
                            <h4>How Do Students Use Rankings?</h4>
                        </a>
                        <p>Church-key ugh sriracha slow-carb, +1 you probably haven't heard of them put a bird on it
                            single-origin coffee. Pork belly irony chia, fann pack taxidermy Intelligentsia Pitchfork
                            cliche tote bag stumptown authentic umami asymetrical. Bitters rof party fanny pack, street
                            art you probably haven't heard of them Echo Park disrupt.</p>
                        <div class="buttons">
                            <div class="accent-button">
                                <a href="single-post.html">Continue Reading</a>
                            </div>
                            <div class="second-button">
                                <a href="#">Share <i class="fa fa-share-alt"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="classic-item">
                        <a href="single-post.html"><img src="{{ asset('assets/images/news-classic-4.jpg') }}" alt=""></a>
                        <ul>
                            <li>Posted: <em>7 Oct 2015</em></li>
                            <li>By: <em>Admin</em></li>
                            <li>Comments: <em>2</em></li>
                        </ul>
                        <a href="single-post.html">
                            <h4>Thousands enjoy Brick City Weekend events</h4>
                        </a>
                        <p>Church-key ugh sriracha slow-carb, +1 you probably haven't heard of them put a bird on it
                            single-origin coffee. Pork belly irony chia, fann pack taxidermy Intelligentsia Pitchfork
                            cliche tote bag stumptown authentic umami asymetrical. Bitters rof party fanny pack, street
                            art you probably haven't heard of them Echo Park disrupt.</p>
                        <div class="buttons">
                            <div class="accent-button">
                                <a href="single-post.html">Continue Reading</a>
                            </div>
                            <div class="second-button">
                                <a href="#">Share <i class="fa fa-share-alt"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="classic-item block-quote">
                        <i class="fa fa-quote-left"></i>
                        <p>Church key ugh sriracha slow-carb, you probably haven't heard of them put bird single origin
                            coffee. Pork belly irony chia, fann pack taxidermy Intelligent tote bag.</p>
                        <h6>John Smith - Ceo Founder</h6>
                    </div>
                    <div class="classic-item">
                        <a href="single-post.html"><img src="{{ asset('assets/images/news-classic-3.jpg') }}" alt=""></a>
                        <ul>
                            <li>Posted: <em>7 Oct 2015</em></li>
                            <li>By: <em>Admin</em></li>
                            <li>Comments: <em>2</em></li>
                        </ul>
                        <a href="single-post.html">
                            <h4>visiting artists: giles bailey</h4>
                        </a>
                        <p>Church-key ugh sriracha slow-carb, +1 you probably haven't heard of them put a bird on it
                            single-origin coffee. Pork belly irony chia, fann pack taxidermy Intelligentsia Pitchfork
                            cliche tote bag stumptown authentic umami asymetrical. Bitters rof party fanny pack, street
                            art you probably haven't heard of them Echo Park disrupt.</p>
                        <div class="buttons">
                            <div class="accent-button">
                                <a href="single-post.html">Continue Reading</a>
                            </div>
                            <div class="second-button">
                                <a href="#">Share <i class="fa fa-share-alt"></i></a>
                            </div>
                        </div>
                    </div>
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
                    </div> --}}
                </div>
            </div>
            <div class="col-md-4">
                <div class="side-bar">
                    <form action="{{ route('news.search') }}" method="get">
                        @csrf
                        <div class="search-box">
                            <input type="text" class="search" name="query" placeholder="Search..." value="">
                        </div>
                        <div>
                            <button class="brn btn-primary" type="submit">Search</button>
                        </div>
                    </form>
                    <div class="categories">
                        <div class="widget-heading">
                            <h4>Categories</h4>
                        </div>
                        <ul>
                            @foreach ($categories as $category)
                            <li>
                                {{-- {!!  (Str::lower($category->category_desc)) !!} --}}
                                <a href="/news/news-{!!  (Str::lower($category->category_desc)) !!}">
                                    <i class="fa fa-angle-right"></i>{{ $category->category_desc }}
                                </a>
                            </li>
                            @endforeach

                            {{-- <li><a href="#"><i class="fa fa-angle-right"></i>Design</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>International</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Learning</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Read</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Education</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Finance</a></li> --}}
                        </ul>
                    </div>
                    {{-- <div class="recent-news">
                        <div class="widget-heading">
                            <h4>Recent News</h4>
                        </div>
                        <ul>
                            <li>
                                <a href="single-post.html"><img src="{{ asset('assets/images/course-8.jpg') }}"" alt=""></a>
                                <a href="single-post.html">
                                    <h6>Visiting Artists: Giles Bailey</h6>
                                </a>
                                <span>7 October 2015</span>
                            </li>
                            <li>
                                <a href="single-post.html"><img src="{{ asset('assets/images/course-7.jpg') }}" alt=""></a>
                                <a href="single-post.html">
                                    <h6>How Students use Rankings?</h6>
                                </a>
                                <span>7 October 2015</span>
                            </li>
                            <li>
                                <a href="single-post.html"><img src="{{ asset('assets/images/course-6.jpg') }}" alt=""></a>
                                <a href="single-post.html">
                                    <h6>University Finder: Compare</h6>
                                </a>
                                <span>7 October 2015</span>
                            </li>
                        </ul>
                    </div> --}}
                    <div class="tags">
                        <div class="widget-heading">
                            <h4>Tags</h4>
                        </div>
                        <ul>
                            @foreach ($tags as $tag)
                                <li><a href="#">{{ $tag->tag_desc }}</a></li>
                            @endforeach
                            {{-- <li><a href="#">Photography</a></li>
                            <li><a href="#">Design</a></li>
                            <li><a href="#">Envanto</a></li>
                            <li><a href="#">Course</a></li>
                            <li><a href="#">Education</a></li>
                            <li><a href="#">College</a></li>
                            <li><a href="#">Teachers</a></li>
                            <li><a href="#">Read</a></li>
                            <li><a href="#">Excursions</a></li> --}}
                        </ul>
                    </div>
                    {{-- <div class="recent-tweets">
                        <div class="widget-heading">
                            <h4>Recents Tweets</h4>
                        </div>
                        <ul>
                            <li>
                                <i class="fa fa-twitter"></i>
                                <p>Tote bag post-ironic messenger bag bespoke cray wolf moon key ready.</p>
                                <a href="#">https://olark.recruiterbox.com/jobs/fk0h</a>
                                <span>21 minutes ago.</span>
                            </li>
                            <li>
                                <i class="fa fa-twitter"></i>
                                <p>Tote bag post-ironic messenger bag bespoke cray wolf moon key ready.</p>
                                <a href="#">https://olark.recruiterbox.com/jobs/fk0h</a>
                                <span>21 minutes ago.</span>
                            </li>
                        </ul>
                    </div> --}}
                    {{-- <div class="instagram-feeds">
                        <div class="widget-heading">
                            <h4>Instagram</h4>
                        </div>
                        <div class="instagram-items">
                            <div class="instagram-item">
                                <a href="#"><img src="http://placehold.it/90x80" alt=""></a>
                            </div>
                            <div class="instagram-item">
                                <a href="#"><img src="http://placehold.it/90x80" alt=""></a>
                            </div>
                            <div class="instagram-item">
                                <a href="#"><img src="http://placehold.it/90x80" alt=""></a>
                            </div>
                            <div class="instagram-item">
                                <a href="#"><img src="http://placehold.it/90x80" alt=""></a>
                            </div>
                            <div class="instagram-item">
                                <a href="#"><img src="http://placehold.it/90x80" alt=""></a>
                            </div>
                            <div class="instagram-item">
                                <a href="#"><img src="http://placehold.it/90x80" alt=""></a>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</section>


