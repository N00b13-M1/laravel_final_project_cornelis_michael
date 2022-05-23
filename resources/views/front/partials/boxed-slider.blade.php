<div id="boxed-slider">
    <div class="slider container">
        <div class="fullwidthbanner-container">
            <div class="fullwidthbanner">
                <ul>
                    <li class="first-slide" data-transition="fade" data-slotamount="10" data-masterspeed="300">
                        {{-- {{ dd($banners) }} --}}
                        <img src="{{ asset('assets/images/' . $banners[0]->bg ) }}" data-fullwidthcentering="on" alt="slide">
                        <div class="tp-caption first-line lft tp-resizeme start" data-x="left" data-hoffset="0" data-y="160" data-speed="1000" data-start="200" data-easing="Power4.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0">{!! $banners[0]->title !!}</div>
                        <div class="tp-caption solution-line lft tp-resizeme start" data-x="left" data-hoffset="0" data-y="225" data-speed="2000" data-start="200" data-easing="Power4.easeIn" data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0">{{ $banners[0]->dropbox }}</div>
                        <div class="tp-caption second-line lfb tp-resizeme start" data-x="left" data-hoffset="0" data-y="310" data-speed="1000" data-start="800" data-easing="Power4.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0"><p>{!! $banners[0]->description !!}</p></div>
                        <div class="tp-caption third-line lfb tp-resizeme start" data-x="left" data-hoffset="0" data-y="400" data-speed="1000" data-start="800" data-easing="Power4.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0"><div class="slider-button"><a href="{{ $banners[0]->url }}">{{ $banners[0]->url_text }}</a></div>
                        </div>
                    </li>
                    <li class="first-slide" data-transition="fade" data-slotamount="10" data-masterspeed="300">
                        <img src="{{ asset('assets/images/' . $banners[1]->bg ) }}" data-fullwidthcentering="on" alt="slide">
                        <div class="tp-caption first-line lft tp-resizeme start" data-x="left" data-hoffset="0" data-y="160" data-speed="1000" data-start="200" data-easing="Power4.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0">{!! $banners[1]->title !!}</div>
                        <div class="tp-caption solution-line lft tp-resizeme start" data-x="left" data-hoffset="0" data-y="225" data-speed="2000" data-start="200" data-easing="Power4.easeIn" data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0">{{ $banners[1]->dropbox }}</div>
                        <div class="tp-caption second-line description-line lfb tp-resizeme start" data-x="left" data-hoffset="0" data-y="310" data-speed="1000" data-start="800" data-easing="Power4.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0"><p>{!! $banners[1]->description !!}</p></div>
                        <div class="tp-caption third-line lfb tp-resizeme start" data-x="left" data-hoffset="0" data-y="400" data-speed="1000" data-start="800" data-easing="Power4.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0"><div class="slider-button"><a href="{{ $banners[1]->url }}">{{ $banners[1]->url_text }}</a></div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
