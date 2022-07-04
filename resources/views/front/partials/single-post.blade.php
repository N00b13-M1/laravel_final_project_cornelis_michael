<section class="single-post">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="classic-posts">
                    <div class="single-item">
                        <img src="{{ asset('assets/images/' . $news_post[0]->img) }}" alt="">
                        <ul>
                            <li>Posted: <em>{{ $news_post[0]->created_when }}</em></li>
                            <li>By: <em>{{ $news_post[0]->posted_by }}</em></li>
                            <li>Comments: <em>{{ $news_post[0]->number_of_comments }}</em></li>
                        </ul>
                        <a href="{{ route('news.single', $id) }}"><h4>{{ $news_post[0]->title }}</h4></a>
                        <p>{{ $news_post[0]->text1 }}</p>
                        <div class="block"><em>{{ $news_post[0]->strong }}</em></div>
                        <p>{{ $news_post[0]->text2 }}</p>
                        <div class="tags-share">
                            <div class="tag">
                                <i class="fa fa-tags"></i><p>Tags:</p>
                                <span>
                                    @foreach ( $news_post[0]->tags as $item)
                                        @if ($item->last)
                                        <a href="#">{{ $item->tag_desc }}</a>
                                        @else
                                        <a href="#">{{ $item->tag_desc }}</a>,
                                        @endif
                                    @endforeach
                                    {{-- @foreach ( $news_post[0]->tags as $item)
                                    <a href="#">{{ $item->tag_desc }}</a>
                                    @endforeach --}}
                                </span>
                            </div>
                            <div class="share">
                                <div class="second-button">
                                    <a href="#">Share <i class="fa fa-share-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- {{ dd(post) }} --}}

                <div class="comments">
                    <div class="heading">
                        <h2>Comments</h2>
                    </div>
                    <div class="comment-item">
                        <img src="http://placehold.it/54x54" alt="">
                        <h4>John Smith</h4>
                        <span>1 hour ago</span>
                        <div class="reply-button">
                            <a href="#">Reply</a>
                        </div>
                        <p>Blue Bottle occupy fanny pack hashtag, cronut brunch PBR Odd Future. Brooklyn cray fap Meggings quinoa 8-bit, blog actually roof party master cleanse iPhone four dollar toast.Tofu dreamcatcher 90's letterpress vinyl megging</p>
                    </div>
                    <div class="comment-item replied-comment">
                        <img src="http://placehold.it/54x54" alt="">
                        <h4>Endris Flenderno</h4>
                        <span>1 hour ago</span>
                        <div class="reply-button">
                            <a href="#">Reply</a>
                        </div>
                        <p>Blue Bottle occupy fanny pack hashtag, cronut brunch PBR Odd Future. Brooklyn cray fap Meggings quinoa 8-bit, blog actually roof party master cleanse iPhone four dollar toast.Tofu dreamcatcher 90's letterpress vinyl megging</p>
                    </div>
                    <div class="comment-item replied-comment">
                        <img src="http://placehold.it/54x54" alt="">
                        <h4>Marcos Marrison</h4>
                        <span>1 hour ago</span>
                        <div class="reply-button">
                            <a href="#">Reply</a>
                        </div>
                        <p>Blue Bottle occupy fanny pack hashtag, cronut brunch PBR Odd Future. Brooklyn cray fap Meggings quinoa 8-bit, blog actually roof party master cleanse iPhone four dollar toast.Tofu dreamcatcher 90's letterpress vinyl megging</p>
                    </div>
                    <div class="comment-item">
                        <img src="http://placehold.it/54x54" alt="">
                        <h4>Robert Landerson</h4>
                        <span>1 hour ago</span>
                        <div class="reply-button">
                            <a href="#">Reply</a>
                        </div>
                        <p>Blue Bottle occupy fanny pack hashtag, cronut brunch PBR Odd Future. Brooklyn cray fap Meggings quinoa 8-bit, blog actually roof party master cleanse iPhone four dollar toast.Tofu dreamcatcher 90's letterpress vinyl megging</p>
                    </div>
                </div>
                <div class="leave-comment">
                    <div class="heading">
                        <h2>Leave a comment <small>(Log in or register to Comment)</small></h2>
                    </div>
                    @if (Auth::check())
                    <div class="comment-form">
                        <form action="{{  route('comment_submit', $news_post[0]->id) }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" id="name" name="name" placeholder="Full Name"
                                    value="{{ Auth::user()->name }}">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" id="address" name="email" placeholder="E-mail Address"
                                    value="{{ Auth::user()->email }}">
                                </div>
                                <div class="col-md-12">
                                    <textarea id="message" class="message" name="comment" placeholder="Write comment"></textarea>
                                </div>
                            </div>
                            <div class="accent-button">
                                <a href=""><button type="submit" class="accent-button">Submit Comment</button></a>
                            </div>
                        </form>
                    </div>
                    @else
                    <div class="comment-form">
                        <div class="mt-3">
                            <div class="accent-button-request">
                                <a href="{{ route('login') }}">Login</a>
                            </div>
                            <div  class="accent-button-request">
                                <a href="{{ route('register') }}">Register</a>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
            <div class="col-md-4">
                <div class="side-bar">
                    <form action="{{ route('news.search') }}" method="get">
                    <div class="search-box">
                        <input type="text" class="search" name="query" placeholder="Search..." value="">
                    </div>
                    <button type="submit">Search</button>
                    </form>
                    <div class="categories">
                        <div class="widget-heading">
                            <h4>Categories</h4>
                        </div>
                        <ul>
                            @foreach ($categories as $category)
                            <li><a href="#"><i class="fa fa-angle-right"></i>{{ $category->category_desc }}</a></li>
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
                                <a href="single-post.html"><img src="http://placehold.it/70x70" alt=""></a>
                                <a href="single-post.html"><h6>Visiting Artists: Giles Bailey</h6></a>
                                <span>7 October 2015</span>
                            </li>
                            <li>
                                <a href="single-post.html"><img src="http://placehold.it/70x70" alt=""></a>
                                <a href="single-post.html"><h6>How Students use Rankings?</h6></a>
                                <span>7 October 2015</span>
                            </li>
                            <li>
                                <a href="single-post.html"><img src="http://placehold.it/70x70" alt=""></a>
                                <a href="single-post.html"><h6>University Finder: Compare</h6></a>
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
