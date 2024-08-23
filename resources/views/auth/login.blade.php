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
                <h1>Login</h1>
                <ul class="page-breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li>Login</li>
                </ul> 
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!--Register Section-->
    <section class="register-section">
        <div class="auto-container">
            <div class="row clearfix">
                                
                <!--Form Column-->
                <div class="form-column column col-lg-6 col-md-12 col-sm-12">
                
                    <div class="sec-title">
                        <!-- <h2>Login Now</h2> -->
                        <div class="separate"></div>
                    </div>
                                        
                </div>

                <!--Form Column-->
                <div class="form-column column col-lg-3 col-md-12 col-sm-12">
                
                    <div class="sec-title">
                        <h2>Login Now</h2>
                        <div class="separate"></div>
                    </div>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    
                    <!--Login Form-->
                    <div class="styled-form login-form">
                        <form method="post">
                            @csrf
                            <div class="form-group">
                                <span class="adon-icon"><span class="fa fa-envelope"></span></span>
                                <input type="email" name="email" value="Admin" placeholder="Emai Address*" disabled>
                            </div>
                            <input type="hidden" name="email" value="admin@bluggleconferences.com" placeholder="Emai Address*">
                            <div class="form-group">
                                <span class="adon-icon"><span class="fa fa-unlock-alt"></span></span>
                                <input type="password" name="password" value="" placeholder="Enter Password*" autofocus="">
                            </div>
                            <div class="form-group">
                                <input type="checkbox" id="remember-me" name="remember"><label class="remember-me" for="remember-me">&nbsp; Remember Me</label>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="theme-btn btn-style-one"><span class="btn-title">Login Now</span></button>
                            </div>
                                                        
                        </form>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </section>
    <!--End Register Section-->
    
@endsection