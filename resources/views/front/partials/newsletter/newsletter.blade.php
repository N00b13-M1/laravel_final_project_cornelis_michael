<div class="col-md-3">
    <div class="footer-widget">
        <div class="newsletters">

            {{-- Subscription successful --}}
            @if (session()->has('success'))
                <div class="alert alert-success w-50 mx-auto m-3">
                    <p class="text-success">{{ session()->get('success') }}</p>
                </div>
            @endif
            {{-- Subscription failed --}}
            @if (session()->has('error'))
                <div class="alert alert-danger w-50 mx-auto m-3">
                    <p class="text-danger">{{ session()->get('error') }}</p>
                </div>
            @endif
            <h2>Newsletters</h2>
            <div class="line-dec"></div>
            <p>Subsrcibe to our newsletter for latest updates about our site for universe.</p>

            <form action="/subscribe" method="post">
                @csrf
                <input type="text" class="email" name="email" placeholder="Email Address..." value="">
                <div class="accent-button">
                    <a href=""><button type="submit" class="accent-button">Subscribe</button></a>
                    {{-- <button type="submit" class="accent-button">Subscribe</button> --}}
                </div>
            </form>
        </div>
    </div>
</div>

