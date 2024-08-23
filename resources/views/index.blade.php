@extends('layouts.master')
@section('content')

    <!--Main Slider-->

    <section class="main-slider">

        <div class="rev_slider_wrapper fullwidthbanner-container"  id="rev_slider_one_wrapper" data-source="gallery">

            <div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">

                <ul>

                    @php
                    $rs = 0;
                    @endphp
                    @foreach($conferences as $item)
                    @php
                    $rs++;
                    @endphp
                    <li data-index="rs-{{ $rs }}" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb=""  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">

                        <!-- MAIN IMAGE -->
                        <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="20" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="/images/main-slider/1.jpg">

                        <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme big-ipad-hidden rs-parallaxlevel-4" 
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingtop="[0,0,0,0]"
                            data-responsive_offset="on"
                            data-type="shape"
                            data-height="auto"
                            data-whitespace="nowrap"
                            data-width="none"
                            data-hoffset="['-150','-150','-150','-150']"
                            data-voffset="['50','50','50','50']"
                            data-x="['left','left','left','left']"
                            data-y="['top','top','top','top']"
                            data-frames='[{"from":"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>

                            <figure><img src="/images/main-slider/icon/object-1.png" alt=""></figure>

                        </div>



                        <div class="tp-caption tp-resizeme rs-parallaxlevel-1 ipad-hidden" 
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingtop="[0,0,0,0]"
                            data-responsive_offset="on"
                            data-type="shape"
                            data-height="none"
                            data-whitespace="nowrap"
                            data-width="none"
                            data-hoffset="['-100','-100','-100','-100']"
                            data-voffset="['60','60','60','60']"
                            data-x="['left','left','left','left']"
                            data-y="['top','top','top','top']"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1500,"ease":"Power3.easeInOut"},{"delay":"wait","speed":3000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>

                            <figure><img src="/images/main-slider/icon/object-2.png" alt=""></figure>

                        </div>


                        <div class="tp-caption tp-resizeme rs-parallaxlevel-2 ipad-hidden" 
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingtop="[0,0,0,0]"
                            data-responsive_offset="on"
                            data-type="shape"
                            data-height="none"
                            data-whitespace="nowrap"
                            data-width="none"
                            data-hoffset="['-60','-60','-60','-60']"
                            data-voffset="['100','100','100','100']"
                            data-x="['right','right','right','right']"
                            data-y="['top','top','top','top']"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":3000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>

                            <figure><img src="/images/main-slider/icon/object-4.png" alt=""></figure>

                        </div>


                        <div class="tp-caption tp-resizeme rs-parallaxlevel-3 ipad-hidden" 
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingtop="[0,0,0,0]"
                            data-responsive_offset="on"
                            data-type="shape"
                            data-height="none"
                            data-whitespace="nowrap"
                            data-width="none"
                            data-hoffset="['-90','-90','-90','-90']"
                            data-voffset="['170','170','170','100']"
                            data-x="['right','right','right','right']"
                            data-y="['top','top','top','top']"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":3000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>

                            <figure><img src="/images/main-slider/icon/object-3.png" alt=""></figure>

                        </div>



                        <div class="tp-caption tp-resizeme rs-parallaxlevel-2 ipad-hidden" 

                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingtop="[0,0,0,0]"
                            data-responsive_offset="on"
                            data-type="shape"
                            data-height="none"
                            data-whitespace="nowrap"
                            data-width="none"
                            data-hoffset="['-150','-150','-150','-150']"
                            data-voffset="['50','50','50','50']"
                            data-x="['left','left','left','left']"
                            data-y="['bottom','bottom','bottom','bottom']"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":3000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>

                            <figure><img src="/images/main-slider/icon/object-5.png" alt=""></figure>

                        </div>


                        <div class="tp-caption tp-resizeme rs-parallaxlevel-3 ipad-hidden" 

                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingtop="[0,0,0,0]"
                            data-responsive_offset="on"
                            data-type="shape"
                            data-height="none"
                            data-whitespace="nowrap"
                            data-width="none"
                            data-hoffset="['-30','-30','-30','-30']"
                            data-voffset="['50','50','50','50']"
                            data-x="['left','left','left','left']"
                            data-y="['bottom','bottom','bottom','bottom']"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":3000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>

                            <figure><img src="/images/main-slider/icon/object-6.png" alt=""></figure>

                        </div>


                        <div class="tp-caption" 

                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[15,15,15,15]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingtop="[0,0,0,0]"
                            data-responsive_offset="on"
                            data-type="text"
                            data-height="none"
                            data-width="['750','750','750','650']"
                            data-whitespace="normal"
                            data-hoffset="['0','0','0','0']"
                            data-voffset="['-190','-190','-190','-190']"
                            data-x="['left','left','left','left']"
                            data-y="['middle','middle','middle','middle']"
                            data-textalign="['top','top','top','top']"
                            data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>

                            <span class="title"><span>{!! $item->sub_title ?? '' !!}</span></span>

                        </div>



                        <div class="tp-caption" 

                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[15,15,15,15]"
                            data-paddingright="[15,15,15,15]"
                            data-paddingtop="[0,0,0,0]"
                            data-responsive_offset="on"
                            data-type="text"
                            data-height="none"
                            data-width="['750','750','750','650']"
                            data-whitespace="normal"
                            data-hoffset="['0','0','0','0']"
                            data-voffset="['-50','-80','-80','-80']"
                            data-x="['left','left','left','left']"
                            data-y="['middle','middle','middle','middle']"
                            data-textalign="['top','top','top','top']"
                            data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>

                            <h2 style="font-size:50px">{!! $item->title !!}</h2>

                        </div>



                        <div class="tp-caption" 

                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[15,15,15,15]"
                            data-paddingright="[15,15,15,15]"
                            data-paddingtop="[0,0,0,0]"
                            data-responsive_offset="on"
                            data-type="text"
                            data-height="none"
                            data-width="['700','750','700','450']"
                            data-whitespace="normal"
                            data-hoffset="['0','0','0','0']"
                            data-voffset="['90','30','30','40']"
                            data-x="['left','left','left','left']"
                            data-y="['middle','middle','middle','middle']"
                            data-textalign="['top','top','top','top']"
                            data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>

                            <ul class="event-info mt-5">

                                <li><i class="fa fa-map-marker"></i>{{ $item->location }}</li>

                                <li><i class="fa fa-calendar"></i> {{ date('F d, Y', strtotime($item->start)) }}</li>

                            </ul>

                        </div>

                        

                        <div class="tp-caption tp-resizeme" 

                        data-paddingbottom="[0,0,0,0]"

                        data-paddingleft="[15,15,15,15]"

                        data-paddingright="[15,15,15,15]"

                        data-paddingtop="[0,0,0,0]"

                        data-responsive_offset="on"

                        data-type="text"

                        data-height="none"

                        data-whitespace="normal"

                        data-width="['650','650','700','300']"

                        data-hoffset="['0','0','0','0']"

                        data-voffset="['180','120','120','140']"

                        data-x="['left','left','left','left']"

                        data-y="['middle','middle','middle','middle']"

                        data-textalign="['top','top','top','top']"

                        data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>

                            <div class="btn-box">

                                <!-- <a href="buy-ticket" class="theme-btn btn-style-one"><span class="btn-title">Book Ticket</span></a> -->

                                <!-- <a href="Brochure_Advanced_Surgery_2024.pdf" class="theme-btn btn-style-two" download><span class="btn-title">Download Brochure</span></a> -->

                            </div>

                        </div>



                        <div class="tp-caption tp-resizeme" 

                        data-paddingbottom="[0,0,0,0]"

                        data-paddingleft="[15,15,15,0]"

                        data-paddingright="[15,15,15,0]"

                        data-paddingtop="[0,0,0,0]"

                        data-responsive_offset="on"

                        data-type="text"

                        data-height="none"

                        data-whitespace="normal"

                        data-width="['auto','auto','auto','100%']"

                        data-hoffset="['0','0','0','0']"

                        data-voffset="['0','0','0','0']"

                        data-x="['right','right','right','left']"

                        data-y="['middle','middle','middle','bottom']"

                        data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>

                            <div class="time-counter-one">

                                <h6>Starting in:</h6>

                                <div class="time-countdown" data-countdown="{{ date('m/d/Y', strtotime($item->start)) }}"></div>

                            </div>

                        </div>

                    </li>
                    @endforeach
                </ul>

            </div>

        </div>


        <div class="auto-container">
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif

            <!-- Event Search Form -->

            <div class="event-search-form">

                <form method="post">
                    @csrf

                    <div class="row">

                        <!-- Form Group -->

                        <div class="form-group col-lg-4 col-md-12 col-sm-12">

                            <div class="input-outer">

                                <input type="text" name="name" placeholder="Name *" required>

                                <span class="icon fa fa-user"></span>

                            </div>

                        </div>

                        

                        <!-- Form Group -->

                        <div class="form-group col-lg-4 col-md-12 col-sm-12">

                            <div class="input-outer">

                            <input type="email" name="email" placeholder="Email *" required>

                            <span class="icon fa fa-envelope"></span>

                            </div>

                        </div>



                        <!-- Form Group -->

                        <div class="form-group col-lg-4 col-md-12 col-sm-12">

                            <div class="input-outer">

                                <input type="text" name="phone" placeholder="Phone No *" required>

                                <span class="icon fa fa-phone"></span>

                            </div>

                        </div>



                        <!-- Form Group -->

                        <div class="btn-box">

                            <button type="submit" class="theme-btn btn-style-one"><span class="btn-title">Download Brochure</span></button>

                        </div>

                    </div>

                </form>

            </div>

            <!-- End Event Search Form -->

        </div>

    </section>

    <!--End Banner Section -->


    <!-- About Section -->

    <section class="about-section">

        <div class="auto-container">

            <div class="row">

                <!-- Image Column -->

                <div class="image-column col-lg-6 col-md-12 col-sm-12">

                    <div class="about-image-wrapper">

                        <figure class="image-3 wow zoomIn" data-wow-delay="900ms"><img src="{{ $sections[0]->contents[0]->content }}" alt=""/></figure>

                        <figure class="image-2 wow zoomIn" data-wow-delay="600ms"><img src="{{ $sections[0]->contents[1]->content }}" alt=""/></figure>

                        <figure class="image-1 wow zoomIn" data-wow-delay="300ms"><img src="/images/resource/vector.png" alt=""/></figure>

                        <!-- <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image play-btn wow zoomIn" data-wow-delay="1200ms"><span class="icon fa fa-play"></span></a> -->

                    </div>

                </div>



                <!-- Content Column -->

                <div class="content-column col-lg-6 col-md-12 col-sm-12">

                    <div class="inner-column">

                        <div class="sec-title">

                            <span class="sub-title">{{ $sections[0]->sub_title }}</span>

                            <h2>{{ $sections[0]->title }}</h2>

                            <span class="divider"></span>

                        </div>

                        {!! $sections[0]->contents[2]->content !!}

                        <!-- <div class="btn-box">

                            <a href="about" class="theme-btn btn-style-one"><span class="btn-title">About More</span></a>

                        </div> -->

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- End About Section -->


    <!-- Feature Section -->

    <section class="feature-section-two">

        <div class="anim-icons">

            <span class="icon icon-object-2"></span>

            <span class="icon icon-object-3"></span>

            <span class="icon icon-object-4"></span>

            <span class="icon icon-object-5"></span>

        </div>



        <div class="auto-container">

            <div class="row">

                <div class="content-column col-lg-5 col-md-12 col-sm-12">

                    <div class="inner-column">

                        <div class="sec-title">

                            <span class="sub-title">{{ $sections[1]->sub_title }}</span>

                            <h2>{{ $sections[1]->title }}</h2>

                            <span class="divider"></span>

                            {!! $sections[1]->contents[0]->content !!}

                        </div>


                    </div>

                </div>



                <div class="features-column col-lg-7 col-md-12 col-sm-12">

                    <!--Feature Block-->

                    <div class="feature-block-two wow fadeInUp">

                        <div class="inner-box">

                            <div class="icon-box">{!! $sections[1]->contents[1]->type !!}</div>

                            <h4>{{ $sections[1]->contents[1]->content }}</h4>

                            <!-- <p>Dolor sit amet consectetur elit sed eiusmod tempor incd idunt labore et dolore magna aliqua.</p> -->

                        </div>

                        <div class="abs-icon"><i class="icon flaticon-certificate-1"></i></div>

                    </div>



                    <!--Feature Block-->

                    <div class="feature-block-two wow fadeInUp" data-wow-delay="300ms">

                        <div class="inner-box">

                            <div class="icon-box">{!! $sections[1]->contents[2]->type !!}</div>

                            <h4>{{ $sections[1]->contents[2]->content }}</h4>

                            <!-- <p>Dolor sit amet consectetur elit sed eiusmod tempor incd idunt labore et dolore magna aliqua.</p> -->

                        </div>

                        <div class="abs-icon"><i class="icon flaticon-idea"></i></div>

                    </div>



                    <!--Feature Block-->

                    <div class="feature-block-two wow fadeInUp" data-wow-delay="600ms">

                        <div class="inner-box">

                            <div class="icon-box">{!! $sections[1]->contents[3]->type !!}</div>

                            <h4>{{ $sections[1]->contents[3]->content }}</h4>

                            <!-- <p>Dolor sit amet consectetur elit sed eiusmod tempor incd idunt labore et dolore magna aliqua.</p> -->

                        </div>

                        <div class="abs-icon"><i class="icon flaticon-meeting"></i></div>

                    </div>



                    <!--Feature Block-->

                    <div class="feature-block-two wow fadeInUp" data-wow-delay="900ms">

                        <div class="inner-box">

                            <div class="icon-box">{!! $sections[1]->contents[4]->type !!}</div>

                            <h4>{{ $sections[1]->contents[4]->content }}</h4>

                            <!-- <p>Dolor sit amet consectetur elit sed eiusmod tempor incd idunt labore et dolore magna aliqua.</p> -->

                        </div>

                        <div class="abs-icon"><i class="icon flaticon-idea"></i></div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- End Feature Section -->


    <!-- About Section -->

    <section class="about-section-three">

        <div class="auto-container">

            <div class="row">

                <!-- Image Column -->

                <div class="image-column col-lg-6 col-md-12 col-sm-12">

                    <div class="about-image-wrapper">

                        <!-- <div class="info-box">

                            <span class="count">+1560</span>

                            <h4><span>Successful Worldwide</span> Conference</h4>

                        </div> -->

                        <figure class="image-1 wow zoomIn" data-wow-delay="300ms"><img src="{{ $sections[2]->contents[0]->content }}" alt=""/></figure>

                        <figure class="image-2 wow zoomIn" data-wow-delay="600ms"><img src="{{ $sections[2]->contents[1]->content }}" alt=""/></figure>

                    </div>
                    <!-- <a href="register" class="theme-btn btn-style-two mt-3"><span class="btn-title">Book Ticket</span></a> -->

                </div>



                <!-- Content Column -->

                <div class="content-column col-lg-6 col-md-12 col-sm-12">

                    <div class="inner-column">

                        <div class="sec-title">

                        {!! $sections[2]->contents[2]->content !!}

                        </div>



                        <div class="row">


                            <div class="feature-block-four col-sm-12">

                                <div class="inner-box">

                                    <div class="icon-box"><i class="icon flaticon-tourist"></i></div>

                                    <h4>Warm regards,</h4>

                                    <p>Organizing Committee<br>Advanced Surgery 2024 | Bluggle conferences</p>

                                </div>

                            </div>

                        </div>


                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- End About Section -->


    <!-- Call to Action -->

    <section class="call-to-action" style="background-image: url(/images/background/1.jpg);">

        <div class="anim-icons full-width">

            <span class="icon icon-dotted-world left"></span>

            <span class="icon icon-dotted-world right"></span>

        </div>



        <div class="auto-container">

            <div class="content-box wow fadeInUp">

                <!-- <h2>Thought leadership content</h2> -->

                <span class="text pt-5">Explore the unique advantages of joining our conference and connecting with top surgeons. You'll gain invaluable insights and forge meaningful relationships that can significantly enhance your career in the field.</span>

                <a href="abstract" class="theme-btn btn-style-two"><span class="btn-title">Submit your abstract</span></a>

            </div>

        </div>

    </section>

    <!-- End Call to Action -->


    <!-- Schedule Section -->

    <section class="schedule-section">

        <div class="anim-icons full-width">

            <span class="icon icon-circle-2"></span>

        </div>



        <div class="auto-container">

            <div class="sec-title text-center">

                <span class="sub-title">Thought leadership</span>

                <h2>Join the world's leading companies <br>at Technology Conference</h2>

                <span class="divider"></span>

            </div>



            <div class="schedule-tabs tabs-box">


                <div class="tabs-content">

                    <!--Tab-->

                    <div class="tab active-tab" id="tab-1">

                        <div class="schedule-timeline">

                            <!-- schedule Block -->

                            <div class="schedule-block">

                                <div class="inner-box">

                                    <div class="inner">

                                        <div class="date">

                                            <!-- <span>8.00 AM <br> 10.00 AM</span> -->
                                            <span> </span>

                                        </div>

                                        <div class="speaker-info">

                                            <figure class="thumb">

                                                <img src="/images/committee-member/thumb-1.jpg" alt="">

                                            </figure>

                                            <span class="icon fa fa-microphone"></span>

                                            <h5 class="name">Catherine Merlin</h5>

                                            <!-- <span class="designation">Historian</span> -->

                                        </div>

                                        <h4><a href="schedule-detail">St. Mary's Hospital School of Nursing, United Kingdom</a></h4>

                                    </div>

                                </div>

                            </div>



                            <!-- schedule Block -->

                            <div class="schedule-block even">

                                <div class="inner-box">

                                    <div class="inner">

                                        <div class="date">

                                            <!-- <span>10:00 am <br>11:00 am</span> -->
                                            <span> </span>

                                        </div>

                                        <div class="speaker-info">

                                            <figure class="thumb">

                                                <img src="/images/committee-member/thumb-2.jpg" alt="">

                                            </figure>

                                            <span class="icon fa fa-microphone"></span>

                                            <h5 class="name">Dr. Nazeem Fathima</h5>

                                            <!-- <span class="designation">Art Critic</span> -->

                                        </div>

                                        <h4><a href="schedule-detail">Mount Sinai Hospital</a></h4>

                                    </div>

                                </div>

                            </div>



                            <!-- schedule Block -->

                            <div class="schedule-block">

                                <div class="inner-box">

                                    <div class="inner">

                                        <div class="date">

                                            <!-- <span>10:00 am <br>11:00 am</span> -->
                                            <span> </span>

                                        </div>

                                        <div class="speaker-info">

                                            <figure class="thumb">

                                                <img src="/images/committee-member/thumb-3.jpg" alt="">

                                            </figure>

                                            <span class="icon fa fa-microphone"></span>

                                            <h5 class="name">Dr. Lee Yuan</h5>

                                            <!-- <span class="designation">Insurance consultant</span> -->

                                        </div>

                                        <h4><a href="schedule-detail">Taipei Medical University</a></h4>

                                    </div>

                                </div>

                            </div>



                            <!-- schedule Block -->

                            <div class="schedule-block even">

                                <div class="inner-box">

                                    <div class="inner">

                                        <div class="date">

                                            <!-- <span>12:00 pm <br>01:00 pm</span> -->
                                            <span> </span>

                                        </div>

                                        <div class="speaker-info">

                                            <figure class="thumb">

                                                <img src="/images/committee-member/thumb-4.jpg" alt="">

                                            </figure>

                                            <span class="icon fa fa-microphone"></span>

                                            <h5 class="name">Prof Dr Ravi Kumar Chittoria</h5>

                                            <!-- <span class="designation">Art Critic</span> -->

                                        </div>

                                        <h4><a href="schedule-detail">Associate Dean (Academic) Head of IT & Telemedicine Senior Professor of Plastic Surgery JIPMER, Puducherry</a></h4>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>


                </div>

            </div>

        </div>

    </section>

    <!--End schedule Section -->



@endsection