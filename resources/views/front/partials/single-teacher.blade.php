<section class="single-teacher">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="single-teacher-item">
                    <div class="row">
                        <div class="col-md-5">
                            <img src="{{ asset('assets/images/' . $professors[0]->professor_photo) }}" alt="">

                            @if (Auth::check())
                                <div class="contact-form">
                                    <form action="/back/professor/teacher-message" method="post">
                                        @csrf
                                        <h4>Contact me</h4>
                                        <input type="text" id="name" name="name" placeholder="Full Name"
                                        value="{{ Auth::user()->name }}">
                                        <input type="email" id="email" name="email" placeholder="E-mail Address"
                                        value="{{ Auth::user()->email }}">
                                        <textarea id="message" class="message" name="message" placeholder="Write message"></textarea>
                                        <div class="accent-button">
                                            <a href="#"><button type="submit">SEND MESSAGE</button></a>
                                        </div>
                                    </form>
                                </div>
                            @else
                            <div class="contact-form">
                                <h4>Contact me</h4>
                                <div class="accent-button-request">
                                    <a href="{{ route('login') }}">Login</a>
                                </div>
                                <div  class="accent-button-request">
                                    <a href="{{ route('register') }}">Register</a>
                                </div>
                            </div>
                            @endif
                        </div>
                        <div class="col-md-7">
                            <div class="right-info">
                                <div class="name">
                                    <h2>{{ $professors[0]->professor_name }}</h2>
                                    <span>{{ $professors[0]->professor_title }}</span>
                                    <img src="{{ asset('assets/images/line-dec.png') }}" alt="">
                                </div>
                                <div class="icons">
                                    <ul>
                                        <li><a href="{{ url('http://www.facebook.com/' . $professors[0]->facebook_id) }}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="{{ url('http://www.twitter.com/' .$professors[0]->twitter_id) }}" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="{{ url('http://www.dribble.com/' . $professors[0]->dribble_id) }}" target="_blank"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="{{ url('http://www.linkedin.com/' . $professors[0]->linkedin_id) }}" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                                <div class="description">
                                    <p>{{ $professors[0]->text1 }}</p>
                                    <h4>Biography</h4>
                                    <p><em>{{ $professors[0]->textstrong }}</em><br><br>{{ $professors[0]->text2 }}</p>
                                    <ul>
                                        <li><i class="fa fa-phone"></i>{{ $professors[0]->phone }}</li>
                                        <li><i class="fa fa-envelope"></i><a href="#"> {{ $professors[0]->email }}</a></li>
                                        <li><i class="fa fa-skype"></i><a href="#">{{ $professors[0]->skype_id }}</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
