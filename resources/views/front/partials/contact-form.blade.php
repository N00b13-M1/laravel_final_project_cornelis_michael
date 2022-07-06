<section class="contact-form">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="location-contact">
                    <div class="widget-heading">
                        <h4>Location Map</h4>
                    </div>
                    <div class="content-map">
                        <iframe
                        src="{{ url("https://maps.google.com/maps?q=". $contact[0]->address ."&t=&z=15&ie=UTF8&iwloc=&output=embed") }}"
                        width="100%" height="420px" frameborder="0"
                        style="border:0; border-radius: 15px; position: relative; z-index: 2;"
                        allowfullscreen="">
                    </iframe>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                @if (Auth::check())
                <div class="message-form">
                    <div class="widget-heading">
                        <h4>Contact Us</h4>
                    </div>
                    <div class="message-content">
                        <form action="/back/admin/admin-message" method="post">
                            @csrf
                            <h4>Contact me</h4>
                            <input type="text" id="name" name="name" placeholder="Full Name"
                            value="{{ Auth::user()->name }}">
                            <input type="email" id="email" name="email" placeholder="E-mail Address"
                            value="{{ Auth::user()->email }}">
                            <textarea id="message" class="message" name="message" placeholder="Write message"></textarea>
                            <div class="accent-button">
                                <a href="#"><button type="submit">Submit Message</button></a>
                            </div>
                        </form>
                    </div>
                </div>
                @else
                <div class="widget-heading">
                    <h4>Contact Us</h4>
                    <div class="accent-button-request">
                        <a href="{{ route('login') }}">Login</a>
                    </div>
                    <div  class="accent-button-request">
                        <a href="{{ route('register') }}">Register</a>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>

