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
                        src="{{ url("https://maps.google.com/maps?q=". $contact[0]->address ."&t=&z=18&ie=UTF8&iwloc=&output=embed") }}"
                        width="100%" height="420px" frameborder="0"
                        style="border:0; border-radius: 15px; position: relative; z-index: 2;"
                        allowfullscreen="">
                    </iframe>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="message-form">
                    <div class="widget-heading">
                        <h4>Contact Us</h4>
                    </div>
                    <div class="message-content">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" id="name" name="s" placeholder="Full Name" value="">
                            </div>
                            <div class="col-md-6">
                                <input type="text" id="address" name="s" placeholder="E-mail Address" value="">
                            </div>
                            <div class="col-md-12">
                                <textarea id="message" class="message" name="message" placeholder="Write message"></textarea>
                            </div>
                        </div>
                        <div class="accent-button">
                            <a href="#">Submit Message</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
