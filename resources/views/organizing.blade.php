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
                <h1>Organizing Committee</h1>
                <ul class="page-breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li>Organizing Committee</li>
                </ul> 
            </div>
        </div>
    </section>
    <!--End Page Title-->


    <!-- Speakers Section -->

    <section class="speakers-section">

        <div class="anim-icons full-width">

            <span class="icon icon-dotted-circle"></span>

        </div>



        <div class="auto-container">

            <div class="sec-title text-center">

                <span class="sub-title">Our Committee</span>

                <h2>Members</h2>

                <span class="divider"></span>

            </div>



            <div class="row">

                <!-- Speaker block -->
                @foreach($members as $member)
                <div class="speaker-block col-lg-3 col-md-6 col-sm-12 wow fadeInUp">

                    <div class="inner-box">

                        <div class="image-box">

                            <figure class="image"><img src="{{ $member->img }}" alt=""></figure>

                        </div>

                        <div class="info-box">

                            <h4 class="name">{{ $member->name }}</h4>

                            <span class="designation">{!! $member->description !!}</span>

                        </div>

                    </div>

                </div>
                @endforeach


            </div>

        </div>

    </section>

    <!-- End Speakers Section -->

@endsection