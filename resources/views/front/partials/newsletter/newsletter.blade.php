<div class="col-md-3">
    <div class="footer-widget">
        <div class="newsletters">
            <h2>Newsletters</h2>
            <div class="line-dec"></div>
            <p>Subsrcibe to our newsletter for latest updates about our site for universe.</p>


            <form action="/newsletter/subscribe" method="post">
                @csrf
                <input type="text" class="email" name="emailsubscription" placeholder="Email Address..." value="">
                <div class="accent-button">
                    {{-- <a href=""><button type="submit" class="accent-button">Subscribe</button></a> --}}
                    <button type="submit" class="accent-button">Subscribe</button>
                </div>
            </form>
        </div>
    </div>
</div>
