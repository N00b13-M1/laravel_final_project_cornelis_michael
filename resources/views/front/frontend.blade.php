@extends('front.layouts.app')
    @section('content')
    <div class="sidebar-menu-container" id="sidebar-menu-container">

		<div class="sidebar-menu-push">

			<div class="sidebar-menu-overlay"></div>

			<div class="sidebar-menu-inner">
                @include('front.partials.header')
                @include('front.partials.search')
                @include('front.partials.boxed-slider')
                @include('front.partials.welcome-intro')
                @include('front.partials.popular-courses')
                @include('front.partials.testimonials-news')
                @include('front.partials.read-books')
                @include('front.partials.our-teachers')
                @include('front.partials.call-to-action')
                @include('front.partials.footer')
				<a href="#" class="go-top"><i class="fa fa-angle-up"></i></a>
			</div>
		</div>
        @include('front.partials.sidebar-menu')
	</div>
    @endsection

