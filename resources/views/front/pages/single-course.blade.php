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
                <div class="page-heading">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<h1>Single Course</h1>
								<span>Salvia next level crucifix pickled heirloom synth</span>
								<div class="page-list">
									<ul>
										<li class="active"><a href="index.html">Home</a></li>
										<li><i class="fa fa-angle-right"></i></li>
										<li><a href="courses-grid.html">Single Course</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
                @include('front.partials.single-course')
                @include('front.partials.call-to-action')
                @include('front.partials.footer')
				<a href="#" class="go-top"><i class="fa fa-angle-up"></i></a>
			</div>
		</div>
        @include('front.partials.sidebar-menu')
	</div>
    @endsection
