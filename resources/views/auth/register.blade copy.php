@extends('layouts.master')
@section('title','Register')
@section('content')

    <style>
        table.cart-table {
            width: 100%;
        }
        td {
            border-color:#e5e5e5;
            border-width:1px;
        }
        th, td.price {
            text-align: center;
        }
        
    </style>

    <!--Page Title-->
    <section class="page-title" style="background-image: url(images/background/11.jpg);">
        <div class="anim-icons full-width">
            <span class="icon icon-bull-eye"></span>
            <span class="icon icon-dotted-circle"></span>
        </div>
        <div class="auto-container">
            <div class="title-outer">
                <h1>Register</h1>
                <ul class="page-breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li>Register</li>
                </ul> 
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!--Register Section-->
    <section class="register-section">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="sec-title text-center">

                    <!-- <span class="sub-title">Our Features</span> -->

                    <h2>Your Primary Details</h2>

                    <span class="divider"></span>

                </div>
                
                <!--Form Column-->
                <div class="form-column column col-lg-6 col-md-12 col-sm-12">
                
                    <!-- <div class="sec-title">
                        <h2>Register Here</h2>
                        <div class="separate"></div>
                    </div> -->
                    
                    <!--Login Form-->
                    <div class="styled-form register-form">
                        <form method="post">
                            @csrf
                            <div class="form-group">
                                <span class="adon-icon"><span class="fa fa-user"></span></span>
                                <input type="text" name="username" value="" placeholder="Your Name *">
                            </div>
                            <div class="form-group">
                                <span class="adon-icon"><span class="fa fa-envelope"></span></span>
                                <input type="email" name="useremil" value="" placeholder="Emai Address*">
                            </div>
                            <div class="form-group">
                                <span class="adon-icon"><span class="fa fa-unlock-alt"></span></span>
                                <input type="password" name="userpassword" value="" placeholder="Enter Password">
                            </div>
                            <div class="form-group">
                                <span class="adon-icon"><span class="fa fa-phone"></span></span>
                                <input type="text" name="phone" value="" placeholder="Enter Phone No">
                            </div>
                            <div class="form-group">
                                <span class="adon-icon"><span class="fa fa-address-book"></span></span>
                                <textarea name="address" placeholder="Enter Address"></textarea>
                            </div>
                            
                        </form>
                    </div>
                    
                </div>

                <!--Form Column-->
                <div class="form-column column col-lg-6 col-md-12 col-sm-12">

                
                    <!--Login Form-->
                    <div class="styled-form register-form">
                        <h4 class="mb-3">Your Track Details</h4>
                        <form method="post">
                            @csrf
                            <div class="form-group">
                                <!-- <span class="adon-icon"><span class="fa fa-user"></span></span> -->
                                <input type="text" name="username" value="" placeholder="Abstract Category *">
                            </div>
                            <div class="form-group">
                                <!-- <span class="adon-icon"><span class="fa fa-envelope"></span></span> -->
                                <input type="text" name="useremil" value="" placeholder="Title of speech *">
                            </div>
                            
                        </form>
                    </div>
                    
                </div>

                
            </div>
        </div>

        <div class="anim-icons full-width">

            <span class="icon icon-circle-2"></span>

        </div>



        <div class="auto-container">

            <div class="sec-title text-center">
                
                <h2>Choose Package</h2>
                
                <span class="divider"></span>
                
            </div>



            <div class="schedule-tabs tabs-box">

                <div class="btns-box text-center">

                    <h4 class="mb-3">Select Currency</h4>

                    <!--Tabs Box-->

                    <ul class="tab-buttons clearfix">

                        <li class="tab-btn active-btn" data-tab="#tab-1">

                            <span class="day">Select</span>

                            <div style="font-size:50px;padding-bottom:30px;font-weight:bold;color:orange">

                                <span>USD</span>

                                <!-- <span class="month"><span class="colored">Jan</span> 2023</span> -->

                            </div>

                        </li>

                        <li class="tab-btn" data-tab="#tab-2">

                            <span class="day">Select</span>

                            <div style="font-size:50px;padding-bottom:30px;font-weight:bold;color:orange">

                                <span>Euro</span>

                            </div>

                        </li>

                        <li class="tab-btn" data-tab="#tab-3">

                            <span class="day">Select</span>

                            <div style="font-size:50px;padding-bottom:30px;font-weight:bold;color:orange">

                                <span>GBP</span>

                            </div>

                        </li>

                    </ul>

                </div>

                <div class="tabs-content">

                    <!--Tab-->

                    <div class="tab active-tab" id="tab-1">

                        <!-- Cart Outer-->
                        <div class="cart-outer">

                            <h4 class="pb-3">Academic</h4>
                            <div class="table-outer table-responsive">
                                <table class="cart-table">
                                    <thead class="cart-header">
                                        <tr>
                                            <th></th>
                                            <th>Early Bird</th>
                                            <th>Mid Price</th>
                                            <th>Final Price</th>
                                            <th>Select</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <tr>
                                            <td>Speaker</td>
                                            <td class="price">$399</td>
                                            <td class="price">$499</td>
                                            <td class="price">$599</td>
                                            <td class="price"><input type="radio" name="price" value="599"></td>
                                        </tr>
                                        <tr>
                                            <td>Delegate</td>
                                            <td class="price">$299</td>
                                            <td class="price">$399</td>
                                            <td class="price">$499</td>
                                            <td class="price"><input type="radio" name="price" value="499"></td>
                                        </tr>
                                        <tr>
                                            <td>Video Presentation</td>
                                            <td class="price">$199</td>
                                            <td class="price">$299</td>
                                            <td class="price">$399</td>
                                            <td class="price"><input type="radio" name="price" value="399"></td>
                                        </tr>
                                        <tr>
                                            <td>Poster Presentation</td>
                                            <td class="price">$299</td>
                                            <td class="price">$399</td>
                                            <td class="price">$499</td>
                                            <td class="price"><input type="radio" name="price" value="499"></td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>

                            <h4 class="pt-5 pb-3">Business</h4>
                            <div class="table-outer table-responsive">
                                <table class="cart-table" style="width:100%">
                                    <thead class="cart-header">
                                        <tr>
                                            <th class="prod-column"></th>
                                            <th class="price">Early Bird</th>
                                            <th class="price">Mid Price</th>
                                            <th class="price">Final Price</th>
                                            <th>Select</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <tr>
                                            <td>Speaker</td>
                                            <td class="price">$499</td>
                                            <td class="price">$599</td>
                                            <td class="price">$699</td>
                                            <td class="price"><input type="radio" name="price" value="699"></td>
                                        </tr>
                                        <tr>
                                            <td>Delegate</td>
                                            <td class="price">$399</td>
                                            <td class="price">$499</td>
                                            <td class="price">$599</td>
                                            <td class="price"><input type="radio" name="price" value="599"></td>
                                        </tr>
                                        <tr>
                                            <td>Video Presentation</td>
                                            <td class="price">$299</td>
                                            <td class="price">$399</td>
                                            <td class="price">$499</td>
                                            <td class="price"><input type="radio" name="price" value="499"></td>
                                        </tr>
                                        <tr>
                                            <td>Poster Presentation</td>
                                            <td class="price">$299</td>
                                            <td class="price">$399</td>
                                            <td class="price">$499</td>
                                            <td class="price"><input type="radio" name="price" value="499"></td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>

                            <h4 class="pt-5 pb-3">Young Research Forum (YRF):</h4>
                            <div class="table-outer table-responsive">
                                <table class="cart-table" style="width:100%">
                                    <thead class="cart-header">
                                        <tr>
                                            <th class="prod-column"></th>
                                            <th class="price">Early Bird</th>
                                            <th class="price">Mid Price</th>
                                            <th class="price">Final Price</th>
                                            <th>Select</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <tr>
                                            <td>Speaker</td>
                                            <td class="price">$299</td>
                                            <td class="price">$399</td>
                                            <td class="price">$499</td>
                                            <td class="price"><input type="radio" name="price" value="499"></td>
                                        </tr>
                                        <tr>
                                            <td>Delegate</td>
                                            <td class="price">$199</td>
                                            <td class="price">$299</td>
                                            <td class="price">$399</td>
                                            <td class="price"><input type="radio" name="price" value="399"></td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>

                            <h4 class="pt-5 pb-3">Student</h4>
                            <div class="table-outer table-responsive">
                                <table class="cart-table" style="width:100%">
                                    <thead class="cart-header">
                                        <tr>
                                            <th class="prod-column"></th>
                                            <th class="price">Early Bird</th>
                                            <th class="price">Mid Price</th>
                                            <th class="price">Final Price</th>
                                            <th>Select</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <tr>
                                            <td>Speaker</td>
                                            <td class="price">$249</td>
                                            <td class="price">$349</td>
                                            <td class="price">$499</td>
                                            <td class="price"><input type="radio" name="price" value="499"></td>
                                        </tr>
                                        <tr>
                                            <td>Delegate</td>
                                            <td class="price">$149</td>
                                            <td class="price">$249</td>
                                            <td class="price">$349</td>
                                            <td class="price"><input type="radio" name="price" value="349"></td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>

                            <h4 class="pt-5 pb-3">Sponsors</h4>
                            <div class="table-outer table-responsive">
                                <table class="cart-table" style="width:100%">
                                    <thead class="cart-header">
                                        <tr>
                                            <th class="prod-column">Level</th>
                                            <th class="price">Early Bird</th>
                                            <th class="price">Mid Price</th>
                                            <th class="price">Final Price</th>
                                            <th>Select</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <tr>
                                            <td>Silver</td>
                                            <td class="price">$300</td>
                                            <td class="price">$400</td>
                                            <td class="price">$500</td>
                                            <td class="price"><input type="radio" name="price" value="500"></td>
                                        </tr>
                                        <tr>
                                            <td>Gold</td>
                                            <td class="price">$1000</td>
                                            <td class="price">$1100</td>
                                            <td class="price">$1200</td>
                                            <td class="price"><input type="radio" name="price" value="1200"></td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                            
                            <!--Cart Total Box-->
                            <div class="cart-total-box mt-5">
                                <h4>Cart Totals</h4>
                                <!--Totals Table-->
                                <ul class="totals-table">
                                    <li class="clearfix"><span class="col col-title">Subtotal</span><span class="col">$350.00</span></li>
                                    <li class="clearfix"><span class="col col-title">Tax</span><span class="col">$15.00</span></li>
                                    <li class="total clearfix"><span class="col col-title">Total .</span><span class="col">$365.00</span></li>
                                </ul>
                            </div>
                            <div class="text-left"><button type="submit" class="theme-btn checkout-btn">Proceed to Checkout</button></div>
                        </div>
                        <!-- End Cart Outer-->

                    </div>



                    <!--Tab-->

                    <div class="tab" id="tab-2">

                        <div class="schedule-timeline">

                            <!-- schedule Block -->

                            <div class="schedule-block">

                                <div class="inner-box">

                                    <div class="inner">

                                        <div class="date">

                                            <span>8.00 AM <br> 10.00 AM</span>

                                        </div>

                                        <div class="speaker-info">

                                            <figure class="thumb">

                                                <img src="/images/resource/thumb-1.jpg" alt="">

                                            </figure>

                                            <span class="icon fa fa-microphone"></span>

                                            <h5 class="name">Tripp Mckay</h5>

                                            <span class="designation">Historian</span>

                                        </div>

                                        <h4><a href="schedule-detail">Social Profit from Venture (SROI) Gathering</a></h4>

                                    </div>

                                </div>

                            </div>



                            <!-- schedule Block -->

                            <div class="schedule-block even">

                                <div class="inner-box">

                                    <div class="inner">

                                        <div class="date">

                                            <span>10:00 am <br>11:00 am</span>

                                        </div>

                                        <div class="speaker-info">

                                            <figure class="thumb">

                                                <img src="/images/resource/thumb-2.jpg" alt="">

                                            </figure>

                                            <span class="icon fa fa-microphone"></span>

                                            <h5 class="name">Milana Myles</h5>

                                            <span class="designation">Art Critic</span>

                                        </div>

                                        <h4><a href="schedule-detail">Marine and Oceanic Government Workers</a></h4>

                                    </div>

                                </div>

                            </div>



                            <!-- schedule Block -->

                            <div class="schedule-block">

                                <div class="inner-box">

                                    <div class="inner">

                                        <div class="date">

                                            <span>10:00 am <br>11:00 am</span>

                                        </div>

                                        <div class="speaker-info">

                                            <figure class="thumb">

                                                <img src="/images/resource/thumb-3.jpg" alt="">

                                            </figure>

                                            <span class="icon fa fa-microphone"></span>

                                            <h5 class="name">Gabrielle Winn</h5>

                                            <span class="designation">Insurance consultant</span>

                                        </div>

                                        <h4><a href="schedule-detail">Home Life Open Entryway Open Occasion of 21</a></h4>

                                    </div>

                                </div>

                            </div>



                            <!-- schedule Block -->

                            <div class="schedule-block even">

                                <div class="inner-box">

                                    <div class="inner">

                                        <div class="date">

                                            <span>12:00 pm <br>01:00 pm</span>

                                        </div>

                                        <div class="speaker-info">

                                            <figure class="thumb">

                                                <img src="/images/resource/thumb-4.jpg" alt="">

                                            </figure>

                                            <span class="icon fa fa-microphone"></span>

                                            <h5 class="name">Rene Wells</h5>

                                            <span class="designation">Art Critic</span>

                                        </div>

                                        <h4><a href="schedule-detail">Developing Force Legislative issues of Arctics Motivation</a></h4>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>



                    <!--Tab-->

                    <div class="tab" id="tab-3">

                        <div class="schedule-timeline">

                            <!-- schedule Block -->

                            <div class="schedule-block">

                                <div class="inner-box">

                                    <div class="inner">

                                        <div class="date">

                                            <span>8.00 AM <br> 10.00 AM</span>

                                        </div>

                                        <div class="speaker-info">

                                            <figure class="thumb">

                                                <img src="/images/resource/thumb-1.jpg" alt="">

                                            </figure>

                                            <span class="icon fa fa-microphone"></span>

                                            <h5 class="name">Tripp Mckay</h5>

                                            <span class="designation">Historian</span>

                                        </div>

                                        <h4><a href="schedule-detail">Social Profit from Venture (SROI) Gathering</a></h4>

                                    </div>

                                </div>

                            </div>



                            <!-- schedule Block -->

                            <div class="schedule-block even">

                                <div class="inner-box">

                                    <div class="inner">

                                        <div class="date">

                                            <span>10:00 am <br>11:00 am</span>

                                        </div>

                                        <div class="speaker-info">

                                            <figure class="thumb">

                                                <img src="/images/resource/thumb-2.jpg" alt="">

                                            </figure>

                                            <span class="icon fa fa-microphone"></span>

                                            <h5 class="name">Milana Myles</h5>

                                            <span class="designation">Art Critic</span>

                                        </div>

                                        <h4><a href="schedule-detail">Marine and Oceanic Government Workers</a></h4>

                                    </div>

                                </div>

                            </div>



                            <!-- schedule Block -->

                            <div class="schedule-block">

                                <div class="inner-box">

                                    <div class="inner">

                                        <div class="date">

                                            <span>10:00 am <br>11:00 am</span>

                                        </div>

                                        <div class="speaker-info">

                                            <figure class="thumb">

                                                <img src="/images/resource/thumb-3.jpg" alt="">

                                            </figure>

                                            <span class="icon fa fa-microphone"></span>

                                            <h5 class="name">Gabrielle Winn</h5>

                                            <span class="designation">Insurance consultant</span>

                                        </div>

                                        <h4><a href="schedule-detail">Home Life Open Entryway Open Occasion of 21</a></h4>

                                    </div>

                                </div>

                            </div>



                            <!-- schedule Block -->

                            <div class="schedule-block even">

                                <div class="inner-box">

                                    <div class="inner">

                                        <div class="date">

                                            <span>12:00 pm <br>01:00 pm</span>

                                        </div>

                                        <div class="speaker-info">

                                            <figure class="thumb">

                                                <img src="/images/resource/thumb-4.jpg" alt="">

                                            </figure>

                                            <span class="icon fa fa-microphone"></span>

                                            <h5 class="name">Rene Wells</h5>

                                            <span class="designation">Art Critic</span>

                                        </div>

                                        <h4><a href="schedule-detail">Developing Force Legislative issues of Arctics Motivation</a></h4>

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