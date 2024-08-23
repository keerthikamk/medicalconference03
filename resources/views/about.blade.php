@extends('layouts.master')
@section('content')

    <!--Page Title-->
    <section class="page-title" style="background-image: url(images/background/11.jpg);">
        <div class="anim-icons full-width">
            <span class="icon icon-bull-eye"></span>
            <span class="icon icon-dotted-circle"></span>
        </div>
        <div class="auto-container">
            <div class="title-outer">
                <h1>About</h1>
                <ul class="page-breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li>About</li>
                </ul> 
            </div>
        </div>
    </section>
    <!--End Page Title-->
    
    <!-- About Section Two -->
    <section class="about-section-two">
        <div class="anim-icons">
            <span class="icon icon-circle-3"></span>
            <span class="icon icon-circle-4"></span>
        </div>

        <div class="auto-container">
            <div class="row">
                 <!-- Content Column -->
                <div class="content-column col-lg-8 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="sub-title">{{ $section->sub_title }}</span>
                            <h2>{!! $section->title !!}</h2>
                            <span class="divider"></span>
                            {!! $contents[0]->content !!}
                        </div>
                    </div>
                </div>

                <!-- Date Column -->
                @if($conference)
                <div class="date-column col-lg-4 col-md-12 col-sm-12">
                    <div class="date-box-outer">
                        <!-- Date Box One / Blue  -->
                        <div class="date-box-one">
                            <span class="day">{{ $conference->date }}</span>
                            <span class="month">{{ $conference->month }}</span>
                            <span class="title">{!! $conference->title !!}</span>
                        </div>
                    </div>
                </div>
                @endif
            </div>

            <!-- Fact Counter Two -->
            <div class="fact-counter-two">
                <div class="row clearfix">
                    <!--Column-->
                    <div class="counter-column col-lg-4 col-md-4 col-sm-12">
                        <div class="inner-box">
                            <div class="count-box">
                                <span class="count-text">{{ $contents[1]->content }}</span>
                                <span class="counter-title">{{ $contents[1]->type }}</span>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="counter-column col-lg-4 col-md-4 col-sm-12" data-wow-delay="300ms">
                        <div class="inner-box">
                            <div class="count-box">
                                <span class="count-text" data-speed="3000" data-stop="{{ $contents[2]->content }}">0</span>
                                <span class="counter-title">{{ $contents[2]->type }}</span>
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="counter-column col-lg-4 col-md-4 col-sm-12 wow zoomIn" data-wow-delay="600ms">
                        <div class="inner-box">
                            <div class="count-box">
                                <span class="count-text">{{ $contents[3]->content }}</span>
                                <span class="counter-title">{{ $contents[3]->type }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End About Section Two -->

    <!-- Feature Section Three-->
    <section class="feature-section-three">
        <div class="auto-container">
            <div class="row">
                <!--Feature Block-->
                <div class="feature-block-five col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="icon-box">{!! $features[0]->type !!}</div>
                        <h4>{!! $features[0]->content !!}</h4>
                        <!-- <p>Dolor sit amet consectetur elit sed eiusmod tempor in idunt labore cdet dolore magna aliqua.</p> -->
                        <a href="scientific" class="theme-btn btn-style-one"><span class="btn-title">More Detail <i class="fa fa-angle-double-right"></i></span></a>
                    </div>
                </div>

                <!--Feature Block-->
                <div class="feature-block-five col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms">
                    <div class="inner-box">
                        <div class="icon-box">{!! $features[1]->type !!}</div>
                        <h4>{!! $features[1]->content !!}</h4>
                        <a href="abstract" class="theme-btn btn-style-one"><span class="btn-title">More Detail <i class="fa fa-angle-double-right"></i></span></a>
                    </div>
                </div>

                <!--Feature Block-->
                <div class="feature-block-five col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms">
                    <div class="inner-box">
                        <div class="icon-box">{!! $features[2]->type !!}</div>
                        <h4>{!! $features[2]->content !!}</h4>
                        <a href="speaker" class="theme-btn btn-style-one"><span class="btn-title">More Detail <i class="fa fa-angle-double-right"></i></span></a>
                    </div>
                </div>

                <!--Feature Block-->
                <div class="feature-block-five col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="900ms">
                    <div class="inner-box">
                        <div class="icon-box">{!! $features[3]->type !!}</div>
                        <h4>{!! $features[3]->content !!}</h4>
                        <a href="register" class="theme-btn btn-style-one"><span class="btn-title">More Detail <i class="fa fa-angle-double-right"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Feature Section -->

@endsection