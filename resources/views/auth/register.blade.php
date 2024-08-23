@extends('layouts.master')
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

                    <span class="sub-title">Register Here</span>

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
                        <form method="get" id="main-form">
                            <div class="form-group">
                                <span class="adon-icon"><span class="fa fa-user"></span></span>
                                <input type="text" name="username" id="inp-name" placeholder="Your Name *" required>
                            </div>
                            <div class="form-group">
                                <span class="adon-icon"><span class="fa fa-envelope"></span></span>
                                <input type="email" name="useremil" id="inp-email" placeholder="Emai Address *" required>
                            </div>
                            <div class="form-group">
                                <span class="adon-icon"><span class="fa fa-phone"></span></span>
                                <input type="text" name="phone" id="inp-phone" placeholder="Enter Phone No *" required>
                            </div>
                            <div class="form-group">
                                <span class="adon-icon"><span class="fa fa-address-book"></span></span>
                                <textarea name="address" placeholder="Enter Address"></textarea>
                            </div>
                            
                        <!-- </form> -->
                    </div>
                    
                </div>

                <!--Form Column-->
                <div class="form-column column col-lg-6 col-md-12 col-sm-12">

                
                    <!--Login Form-->
                    <div class="styled-form register-form">
                        <h4 class="mb-3">Your Track Details</h4>
                        <!-- <form method="post"> -->
                            <div class="form-group">
                                <!-- <span class="adon-icon"><span class="fa fa-user"></span></span> -->
                                <input type="text" name="abstract-title" value="" placeholder="Abstract Title *">
                            </div>
                            <div class="form-group">
                                <!-- <span class="adon-icon"><span class="fa fa-user"></span></span> -->
                                <input type="text" name="abstract-category" value="" placeholder="Abstract Category *">
                            </div>
                            <div class="form-group">
                                <!-- <span class="adon-icon"><span class="fa fa-envelope"></span></span> -->
                                <input type="text" name="title" value="" placeholder="Title of speech *">
                            </div>

                            <input type="hidden" id="h_currency" name="currency">
                            <input type="hidden" id="h_price" name="price">
                            
                        </form>
                    </div>
                    
                </div>

                
            </div>
        </div>


        <div class="auto-container">


            <div class="schedule-tabs tabs-box">

                <div class="btns-box text-center">
                    
                    <h3>Choose Package</h3>

                    <h4 class="m-3">Select Currency</h4>

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

                <div class="row tabs-content">

                    <div class="column col-lg-8 col-md-12 col-sm-12">
                        <!--Tab-->
                        <div class="tab active-tab" id="tab-1">

                            <!-- Cart Outer-->
                            <div class="cart-outer">
                                @foreach ($packages as $package)
                                <h4>{{ $package->package }}</h4>
                                <div class="table-outer table-responsive pt-2 pb-4">
                                    <table class="cart-table">
                                        <thead class="cart-header">
                                            <tr>
                                                <th></th>
                                                
                                                <th>Early Bird<br>(10<sup>th</sup> Septemper)</th>
                                                <th>Mid Price<br>(20<sup>th</sup> Septemper)</th>
                                                <th>Final Price<br>(27<sup>th</sup> Septemper)</th>
                                                <th>Select</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                            @foreach ($package->data as $item)
                                            <tr>
                                                <td>{{ $item->level }}</td>
                                                
                                                <td class="price">${{ $item->early }}</td>
                                                <td class="price">${{ $item->mid }}</td>
                                                <td class="price">${{ $item->final }}</td>
                                                <td class="price"><input type="radio" name="rad_price" value="{{ 'USD_$_' . $item->early }}" onclick="handleClick(this)"></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                @endforeach
                                
                            </div>
                            <!-- End Cart Outer-->

                        </div>

                        <!--Tab-->
                        <div class="tab" id="tab-2">

                            <!-- Cart Outer-->
                            <div class="cart-outer">
                                @foreach ($packages as $package)
                                <h4>{{ $package->package }}</h4>
                                <div class="table-outer table-responsive pt-2 pb-4">
                                    <table class="cart-table">
                                        <thead class="cart-header">
                                            <tr>
                                                <th></th>
                                                <th>Early Bird<br>(10<sup>th</sup>Septemper)</th>
                                                <th>Mid Price<br>(20<sup>th</sup> Septemper)</th>
                                                <th>Final Price<br>(27<sup>th</sup> Septemper)</th>
                                                <th>Select</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                            @foreach ($package->data as $item)
                                            <tr>
                                                <td>{{ $item->level }}</td>
                                                <td class="price">€{{ round($item->early * $currency['EUR'], 2) }}</td>
                                                <td class="price">€{{ round($item->mid * $currency['EUR'], 2) }}</td>
                                                <td class="price">€{{ round($item->final * $currency['EUR'], 2) }}</td>
                                                <td class="price"><input type="radio" name="rad_price" value="{{ 'EUR_€_' . $item->early * $currency['EUR'] }}" onclick="handleClick(this)"></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                @endforeach
                                
                            </div>
                            <!-- End Cart Outer-->

                        </div>

                        <!--Tab-->
                        <div class="tab" id="tab-3">

                            <!-- Cart Outer-->
                            <div class="cart-outer">
                                @foreach ($packages as $package)
                                <h4>{{ $package->package }}</h4>
                                <div class="table-outer table-responsive pt-2 pb-4">
                                    <table class="cart-table">
                                        <thead class="cart-header">
                                            <tr>
                                                <th></th>
                                                <th>Early Bird<br>(10<sup>th</sup>Septemper)</th>
                                                <th>Mid Price<br>(20<sup>th</sup> Septemper)</th>
                                                <th>Final Price<br>(27<sup>th</sup> Septemper)</th>
                                                <th>Select</th>
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                            @foreach ($package->data as $item)
                                            <tr>
                                                <td>{{ $item->level }}</td>
                                                <td class="price">£{{ round($item->early * $currency['GBP'], 2) }}</td>
                                                <td class="price">£{{ round($item->mid * $currency['GBP'], 2) }}</td>
                                                <td class="price">£{{ round($item->final * $currency['GBP'], 2) }}</td>
                                                <td class="price"><input type="radio" name="rad_price" value="{{ 'GBP_£_' .$item->early * $currency['GBP'] }}" onclick="handleClick(this)"></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                @endforeach
                                
                            </div>
                            <!-- End Cart Outer-->

                        </div>
                    </div>

                    <div class="column col-lg-4 col-md-12 col-sm-12">
                        <!--Cart Total Box-->
                        <div class="cart-total-box mt-5">
                            <h4>Cart Totals</h4>
                            <!--Totals Table-->
                            <ul class="totals-table">
                                <li class="clearfix"><span class="col col-title">Subtotal</span><span class="col" id="subtot">$0.00</span></li>
                                <li class="clearfix"><span class="col col-title">Tax</span><span class="col" id="tax">$0.00</span></li>
                                <li class="total clearfix"><span class="col col-title">Total .</span><span class="col" id="tot">$0.00</span></li>
                            </ul>
                        </div>
                        <div class="text-left"><button type="submit" id="rzp-button1" class="theme-btn checkout-btn" style="background-color:#555;" onclick="startPayment(this)" disabled><i class="fas fa-money-bill"></i> Select to Checkout</button></div>
                    </div>

                </div>

            </div>

        </div>

    </section>

    <!--End schedule Section -->
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
        function handleClick(input) {
            // console.log(input);
            const currency = input.value.split('_');
            let num = parseFloat(currency[2]);
            let n = num.toFixed(2);
            document.getElementById("rzp-button1").value = currency[0];
            document.getElementById("subtot").innerHTML = currency[1] + n;
            document.getElementById("tax").innerHTML = currency[1] + '0.00';
            document.getElementById("tot").innerHTML = currency[1] + n;
            document.getElementById("h_currency").value = currency[1];
            document.getElementById("h_price").value = n;
            document.getElementById("rzp-button1").disabled = false;
            document.getElementById("rzp-button1").innerHTML = '<i class="fas fa-money-bill"></i> Proceed to Checkout';
            document.getElementById("rzp-button1").style.backgroundColor = null;
        }

        function handleSubmit() {
            let value = document.getElementById("h_price").value;
            if (value > 0) {
                document.getElementById('main-form').submit();
            }
        }

        // Razorpay
        function startPayment(cur) {
            var amt = parseInt(document.getElementById("h_price").value * 100);
            var name = document.getElementById("inp-name").value;
            var email = document.getElementById("inp-email").value;
            var phone = document.getElementById("inp-phone").value;
            console.log(cur.value);
            var options = {
                key: "rzp_live_5iBLncnvIcU6aG",
                amount: amt,
                currency: cur.value,
                description: "Bluggle Conferences",
                image: "/images/bb1-logo.png",
                theme:
                {
                    "color": "#738276"
                },
                callback_url: "/",
                "prefill": { //We recommend using the prefill parameter to auto-fill customer's contact information especially their phone number
                    "name": name, //your customer's name
                    "email": email,
                    "contact": phone //Provide the customer's phone number for better conversion rates 
                },
            };
            console.log(options);
            var rzp = new Razorpay(options);
            rzp.open();
        }
    </script>
    
    
@endsection