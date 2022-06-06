@extends('front.layouts.app')
    @section('content')
    @php
	$contact = \App\Models\Contact::all();
    @endphp
    <div class="sidebar-menu-container" id="sidebar-menu-container">

        <div class="sidebar-menu-push">

			<div class="sidebar-menu-overlay"></div>

			<div class="sidebar-menu-inner">
                @include('front.partials.header')
                @include('front.partials.search')
                <div class="page-heading" style="background-image: url('../assets/images/{{ $banners[7]->bg }}'); background-size: cover; background-repeat: no-repeat; width: 100%; padding: 100px 0px 0px 0px;">
                    {{-- {{ $banners[7]->bg }} --}}
                    <div class="container">
						<div class="row">
							<div class="col-md-12">
								<h1>{{ $banners[7]->title }}</h1>
								<span>{{ $banners[7]->description }}</span>
								<div class="page-list">
									<ul>
                                        <li class="active"><a href="/">Home</a></li>
										<li><i class="fa fa-angle-right"></i></li>
										<li><a href="{{ route('professor.single', $id) }}">{{ $banners[7]->url_text }}</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
                @include('front.partials.single-teacher')
                @include('front.partials.call-to-action')
                @include('front.partials.footer')
				<a href="#" class="go-top"><i class="fa fa-angle-up"></i></a>
			</div>
		</div>
        @include('front.partials.sidebar-menu')
	</div>
    @endsection


