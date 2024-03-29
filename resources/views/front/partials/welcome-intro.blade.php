<section>
    <div class="welcome-intro">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="section-heading">
                        <h1>Welcome to Educa</h1>
                        <span>Twee Vice synth stumptown</span>
                        <img src="{{ asset('assets/images/line-dec.png') }}" alt="">
                        <p>Twee Vice synth stumptown, distillery aesthetic slow-carb Intelligentsia bitters
                            taxidermy<br>McSweeney's, flexitarian actually iPhone mlkshk brunch.</p>
                    </div>
                    <div class="row">
                        @foreach ($services as $item)
                            <div class="col-md-6 col-sm-6">
                                <div class="service-item">
                                    <i class="{{ $item->logo }}"></i>
                                    <h4>{{ $item->title }}</h4>
                                    <div class="line-dec"></div>
                                    <p>{{ $item->description }}</p>
                                </div>
                            </div>
                        @endforeach
                        {{-- <div class="col-md-6 col-sm-6">
                            <div class="service-item">
                                <i class="fa fa-graduation-cap"></i>
                                <h4>Graduated Steps</h4>
                                <div class="line-dec"></div>
                                <p>Photo booth Banksy YOLO mixtape post-ironic they sold out all.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="service-item">
                                <i class="fa fa-globe"></i>
                                <h4>Global Interested</h4>
                                <div class="line-dec"></div>
                                <p>Photo booth Banksy YOLO mixtape post-ironic they sold out all.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="service-item">
                                <i class="fa fa-clock-o"></i>
                                <h4>Circular Clock</h4>
                                <div class="line-dec"></div>
                                <p>Photo booth Banksy YOLO mixtape post-ironic they sold out all.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="service-item last-service">
                                <i class="fa fa-book"></i>
                                <h4>Open Book</h4>
                                <div class="line-dec"></div>
                                <p>Photo booth Banksy YOLO mixtape post-ironic they sold out all.</p>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="request-information">
                        <div class="widget-heading">
                            <h4>Request Information</h4>
                        </div>

                        @if (Auth::check())
                            <div class="search-form">
                                <form action="/inform-submit" method="post">
                                    @csrf
                                    <input type="text" id="name" name="name" placeholder="Full Name"
                                        value="{{ Auth::user()->name }}">
                                    <input type="email" id="email" name="email" placeholder="E-mail Address"
                                        value="{{ Auth::user()->email }}">
                                    <div class="select mt-4">
                                        <select name="campus" id="campus">
                                            <option value="-1">Campus of Interests</option>
                                            <option value="Nearby">Nearby</option>
                                            <option value="High Classes">High Classes</option>
                                            <option value="Short Time">Short Time</option>
                                            <option value="Long Time">Long Time</option>
                                        </select>
                                    </div>
                                    <div class="select">
                                        <select name="program" id="program">
                                            <option value="-1">Program of Interests</option>
                                            <option value="Working Process">Working Process</option>
                                            <option value="Archivements">Archivements</option>
                                            <option value="Social">Social</option>
                                            <option value="Profits">Profits</option>
                                        </select>
                                    </div>
                                    <div class="accent-button">
                                        {{-- <a href="#">Submit Request</a> --}}
                                        <a href=""><button type="submit" >Submit Request</button></a>
                                    </div>
                                </form>
                            </div>
                        @else
                        <div class="search-form">
                            {{-- <input type="text" id="name" name="s" placeholder="Full Name"
                                value="">
                            <input type="text" id="address" name="s" placeholder="E-mail Address"
                                value="">
                            <div class="select">
                                <select name="mark" id="campus">
                                    <option value="-1">Campus of Interests</option>
                                    <option>Nearby</option>
                                    <option>High Classes</option>
                                    <option>Short Time</option>
                                    <option>Long Time</option>
                                </select>
                            </div>
                            <div class="select">
                                <select name="mark" id="program">
                                    <option value="-1">Program of Interests</option>
                                    <option>Wroking Process</option>
                                    <option>Archivements</option>
                                    <option>Social</option>
                                    <option>Profits</option>
                                </select>
                            </div> --}}
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
            </div>
        </div>
    </div>
</section>
