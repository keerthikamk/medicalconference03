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
                <h1>Scientific Sessions</h1>
                <ul class="page-breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li>Scientific Sessions</li>
                </ul> 
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- FAQ's section -->
    <section class="faq-section">

        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="sub-title">TRACK CATEGORIES</span>
                <h2>Scientific Sessions</h2>
               <span class="divider"></span>
            </div>

            <div class="row">

                <div class="col-lg-6">
                    <!--Accordian Box-->
                    <ul class="accordion-box">
                    @foreach ($scientifics as $item)
                        <!--Block-->
                        <li class="accordion block">
                            <div class="acc-btn"> {{ ucwords($item->title) }} <span class="icon fa fa-plus"></span></div>
                            <div class="acc-content">
                                <div class="content">
                                    <p>{{ $item->content }}</p>
                                    <ul class="list-style-one">
                                    @foreach ($item->lists as $list)
                                        <li>{{ $list->list }}</li>
                                    @endforeach
                                    </ul>
                                </div>
                            </div>
                        </li>
                    @endforeach
                    </ul>
                </div>

                <div class="col-lg-6">
                    <!--Accordian Box-->
                    <ul class="accordion-box">
                    @foreach ($scientifics2 as $item)
                        <!--Block-->
                        <li class="accordion block">
                            <div class="acc-btn"> {{ ucwords($item->title) }} <span class="icon fa fa-plus"></span></div>
                            <div class="acc-content">
                                <div class="content">
                                    <p>{{ $item->content }}</p>
                                    <ul class="list-style-one">
                                    @foreach ($item->lists as $list)
                                        <li>{{ $list->list }}</li>
                                    @endforeach
                                    </ul>
                                </div>
                            </div>
                        </li>
                    @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End FAQ's section -->

@endsection