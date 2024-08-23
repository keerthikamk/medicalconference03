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
                <h1>Abstract Submission</h1>
                <ul class="page-breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li>Abstract Submission</li>
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
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif

            <div class="row">
                 <!-- Content Column -->
                <div class="content-column col-lg-7 col-md-12 col-sm-12">
                    <div class="inner-column mb-5">
                        <div class="sec-title">
                            <h2>{{ $section->title }}</h2>
                            <span class="divider"></span>
                            {!! $contents[0]->content !!}
                        </div>
                    </div>
                    <ul class="shop-list">
                        <div class="sec-title mb-3">
                            <h4>Tracks: </h4>
                        </div>
                        @php
                        $sl = 0;
                        @endphp
                        @foreach($tracks as $track)
                        @php
                        $sl++;
                        @endphp
                        <li><strong>{{ $sl }}.</strong><span class="theme_color"> </span>{{ $track->title }}</li>
                        @endforeach
                    </ul>
                    <div class="place-order">
                        <a href="scientific" class="theme-btn btn-style-one"><span class="btn-title">View More</span></a>
                    </div>
                </div>

                <!-- Date Column -->
                <div class="video-box-outer col-lg-5 col-md-12 col-sm-12">
                    <!-- Info Box -->
                    <div class="info-box-one">
                        <div class="inner-box">
                            <h4>{{ $contents[1]->type }}</h4>
                            {!! $contents[1]->content !!}
                            <a href="{{ $contents[2]->content }}" class="theme-btn btn-style-two"><span class="btn-title">Download</span></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End About Section Two -->

    <!-- Details Form-->
    <div class="details-form mb-5">
        <div class="auto-container">
                
            <!--Billing Details-->
            <div class="billing-details">
                <div class="shop-form">
                    <form method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row clearfix">
                            <div class="col-lg-7 col-md-12 col-sm-12">
                
                                <div class="sec-title"><h2>Your Primary Details</h2></div>
                                <div class="billing-inner">
                                    <div class="row clearfix">
                                        
                                        <!--Form Group-->
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <div class="field-label">First name <sup>*</sup></div>
                                            <input type="text" name="fname" value="" placeholder="First Name" required>
                                        </div>
                                        
                                        <!--Form Group-->
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <div class="field-label">Last name</div>
                                            <input type="text" name="lname" value="" placeholder="Last Name">
                                        </div>

                                        <!--Form Group-->
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <div class="field-label">Email Address <sup>*</sup></div>
                                            <input type="text" name="email" value="" placeholder="Email Address" required>
                                        </div>
                                        
                                        <!--Form Group-->
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <div class="field-label">Phone <sup>*</sup></div>
                                            <input type="text" name="phone" value="" placeholder="Phone No" required>
                                        </div>
                                        
                                        <!--Form Group-->
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <div class="field-label">Organization name </div>
                                            <input type="text" name="organization" value="" placeholder="Organization name" >
                                        </div>
                                        
                                        <!--Form Group-->
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <div class="field-label">Address</div>
                                            <input type="text" name="address1" value="" placeholder="Street Address" class="mb-3">
                                            <input type="text" name="address2" value="" placeholder="Apartment, Suit unit etc (optional)">
                                        </div>
                                        
                                        <!--Form Group-->
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <div class="field-label">Town / City</div>
                                            <input type="text" name="city" value="" placeholder="Town /City">
                                        </div>
                                        
                                        <!--Form Group-->
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <div class="field-label">State / Country</div>
                                            <select name="country">
                                                <option value="">Select an option</option>
                                                <option>Afghanistan</option>
                                                <option>Albania</option>
                                                <option>Algeria</option>
                                                <option>Andorra</option>
                                                <option>Angola</option>
                                                <option>Antigua and Barbuda</option>
                                                <option>Argentina</option>
                                                <option>Armenia</option>
                                                <option>Australia</option>
                                                <option>Austria</option>
                                                <option>Austrian Empire</option>
                                                <option>Azerbaijan</option>
                                                <option>Baden</option>
                                                <option>Bahamas, The</option>
                                                <option>Bahrain</option>
                                                <option>Bangladesh</option>
                                                <option>Barbados</option>
                                                <option>Bavaria</option>
                                                <option>Belarus</option>
                                                <option>Belgium</option>
                                                <option>Belize</option>
                                                <option>Benin (Dahomey)</option>
                                                <option>Bolivia</option>
                                                <option>Bosnia and Herzegovina</option>
                                                <option>Botswana</option>
                                                <option>Brazil</option>
                                                <option>Brunei</option>
                                                <option>Brunswick and Lüneburg</option>
                                                <option>Bulgaria</option>
                                                <option>Burkina Faso (Upper Volta)</option>
                                                <option>Burma</option>
                                                <option>Burundi</option>
                                                <option>Cabo Verde</option>
                                                <option>Cambodia</option>
                                                <option>Cameroon</option>
                                                <option>Canada</option>
                                                <option>Cayman Islands, The</option>
                                                <option>Central African Republic</option>
                                                <option>Central American Federation</option>
                                                <option>Chad</option>
                                                <option>Chile</option>
                                                <option>China</option>
                                                <option>Colombia</option>
                                                <option>Comoros</option>
                                                <option>Congo Free State</option>
                                                <option>Costa Rica</option>
                                                <option>Cote d’Ivoire (Ivory Coast)</option>
                                                <option>Croatia</option>
                                                <option>Cuba</option>
                                                <option>Cyprus</option>
                                                <option>Czechia</option>
                                                <option>Czechoslovakia</option>
                                                <option>Democratic Republic of the Congo</option>
                                                <option>Denmark</option>
                                                <option>Djibouti</option>
                                                <option>Dominica</option>
                                                <option>Dominican Republic</option>
                                                <option>Duchy of Parma</option>
                                                <option>East Germany (German Democratic Republic)</option>
                                                <option>Ecuador</option>
                                                <option>Egypt</option>
                                                <option>El Salvador</option>
                                                <option>Equatorial Guinea</option>
                                                <option>Eritrea</option>
                                                <option>Estonia</option>
                                                <option>Eswatini</option>
                                                <option>Ethiopia</option>
                                                <option>Federal Government of Germany</option>
                                                <option>Fiji</option>
                                                <option>Finland</option>
                                                <option>France</option>
                                                <option>Gabon</option>
                                                <option>Gambia, The</option>
                                                <option>Georgia</option>
                                                <option>Germany</option>
                                                <option>Ghana</option>
                                                <option>Grand Duchy of Tuscany</option>
                                                <option>Greece</option>
                                                <option>Grenada</option>
                                                <option>Guatemala</option>
                                                <option>Guinea</option>
                                                <option>Guinea-Bissau</option>
                                                <option>Guyana</option>
                                                <option>Haiti</option>
                                                <option>Hanover</option>
                                                <option>Hanseatic Republics</option>
                                                <option>Hawaii</option>
                                                <option>Hesse</option>
                                                <option>Holy See</option>
                                                <option>Honduras</option>
                                                <option>Hungary</option>
                                                <option>Iceland</option>
                                                <option>India</option>
                                                <option>Indonesia</option>
                                                <option>Iran</option>
                                                <option>Iraq</option>
                                                <option>Ireland</option>
                                                <option>Israel</option>
                                                <option>Italy</option>
                                                <option>Jamaica</option>
                                                <option>Japan</option>
                                                <option>Jordan</option>
                                                <option>Kazakhstan</option>
                                                <option>Kenya</option>
                                                <option>Kingdom of Serbia/Yugoslavia</option>
                                                <option>Kiribati</option>
                                                <option>Korea</option>
                                                <option>Kosovo</option>
                                                <option>Kuwait</option>
                                                <option>Kyrgyzstan</option>
                                                <option>Laos</option>
                                                <option>Latvia</option>
                                                <option>Lebanon</option>
                                                <option>Lesotho</option>
                                                <option>Lew Chew (Loochoo)</option>
                                                <option>Liberia</option>
                                                <option>Libya</option>
                                                <option>Liechtenstein</option>
                                                <option>Lithuania</option>
                                                <option>Luxembourg</option>
                                                <option>Madagascar</option>
                                                <option>Malawi</option>
                                                <option>Malaysia</option>
                                                <option>Maldives</option>
                                                <option>Mali</option>
                                                <option>Malta</option>
                                                <option>Marshall Islands</option>
                                                <option>Mauritania</option>
                                                <option>Mauritius</option>
                                                <option>Mecklenburg-Schwerin</option>
                                                <option>Mecklenburg-Strelitz</option>
                                                <option>Mexico</option>
                                                <option>Micronesia</option>
                                                <option>Moldova</option>
                                                <option>Monaco</option>
                                                <option>Mongolia</option>
                                                <option>Montenegro</option>
                                                <option>Morocco</option>
                                                <option>Mozambique</option>
                                                <option>Namibia</option>
                                                <option>Nassau</option>
                                                <option>Nauru</option>
                                                <option>Nepal</option>
                                                <option>Netherlands</option>
                                                <option>New Zealand</option>
                                                <option>Nicaragua</option>
                                                <option>Niger</option>
                                                <option>Nigeria</option>
                                                <option>North German Confederation</option>
                                                <option>North German Union</option>
                                                <option>North Macedonia</option>
                                                <option>Norway</option>
                                                <option>Oldenburg</option>
                                                <option>Oman</option>
                                                <option>Orange Free State</option>
                                                <option>Pakistan</option>
                                                <option>Palau</option>
                                                <option>Panama</option>
                                                <option>Papal States</option>
                                                <option>Papua New Guinea</option>
                                                <option>Paraguay</option>
                                                <option>Peru</option>
                                                <option>Philippines</option>
                                                <option>Piedmont-Sardinia</option>
                                                <option>Poland</option>
                                                <option>Portugal</option>
                                                <option>Qatar</option>
                                                <option>Republic of Genoa</option>
                                                <option>Republic of Korea (South Korea)</option>
                                                <option>Republic of the Congo</option>
                                                <option>Romania</option>
                                                <option>Russia</option>
                                                <option>Rwanda</option>
                                                <option>Saint Kitts and Nevis</option>
                                                <option>Saint Lucia</option>
                                                <option>Saint Vincent and the Grenadines</option>
                                                <option>Samoa</option>
                                                <option>San Marino</option>
                                                <option>Sao Tome and Principe</option>
                                                <option>Saudi Arabia</option>
                                                <option>Schaumburg-Lippe</option>
                                                <option>Senegal</option>
                                                <option>Serbia</option>
                                                <option>Seychelles</option>
                                                <option>Sierra Leone</option>
                                                <option>Singapore</option>
                                                <option>Slovakia</option>
                                                <option>Slovenia</option>
                                                <option>Solomon Islands, The</option>
                                                <option>Somalia</option>
                                                <option>South Africa</option>
                                                <option>South Sudan</option>
                                                <option>Spain</option>
                                                <option>Sri Lanka</option>
                                                <option>Sudan</option>
                                                <option>Suriname</option>
                                                <option>Sweden</option>
                                                <option>Switzerland</option>
                                                <option>Syria</option>
                                                <option>Tajikistan</option>
                                                <option>Tanzania</option>
                                                <option>Texas</option>
                                                <option>Thailand</option>
                                                <option>Timor-Leste</option>
                                                <option>Togo</option>
                                                <option>Tonga</option>
                                                <option>Trinidad and Tobago</option>
                                                <option>Tunisia</option>
                                                <option>Turkey</option>
                                                <option>Turkmenistan</option>
                                                <option>Tuvalu</option>
                                                <option>Two Sicilies</option>
                                                <option>Uganda</option>
                                                <option>Ukraine</option>
                                                <option>Union of Soviet Socialist Republics</option>
                                                <option>United Arab Emirates, The</option>
                                                <option>United Kingdom, The</option>
                                                <option>Uruguay</option>
                                                <option>Uzbekistan</option>
                                                <option>Vanuatu</option>
                                                <option>Venezuela</option>
                                                <option>Vietnam</option>
                                                <option>Württemberg</option>
                                                <option>Yemen</option>
                                                <option>Zambia</option>
                                                <option>Zimbabwe</option>
                                            </select>
                                        </div>
                                        
                                        <!--Form Group-->
                                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                            <div class="field-label">Postcode / Zip</div>
                                            <input type="text" name="code" value="" placeholder="Postcode / Zip">
                                        </div>
                                        
                                        <!-- <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="check-box"><input type="checkbox" name="shipping-option" id="account-option"> &ensp; <label for="account-option">Creat an account?</label></div>
                                        </div> -->
                                        
                                        <div class="form-group sec-title col-md-12 col-xs-12"><h2>Abstract submission Details</h2></div>
                                        
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <div class="field-label">Abstract Category *</div>
                                            <select name="category" required>
                                                <option value="">Select Category</option>
                                                <option value="Speaker">Speaker</option>
                                                <option value="Keynote">Keynote</option>
                                                <option value="Poster">Poster</option>
                                                <option value="Oral">Oral</option>
                                                <option value="Workshop">Workshop</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <div class="field-label">Track Name *</div>
                                            <select name="track_name" required>
                                                <option value="">Select Track Name</option>
                                                @foreach($options as $item)
                                                <option>{{ $item->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <div class="field-label">Upload Your File *</div>
                                            <input type="file" name="file" required>
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group text-center">
                                            <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span class="btn-title">Submit Now</span></button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-5 col-md-12 col-sm-12  text-center">
                                <div class="shop-order-box">
                                    <div class="sec-title"><h2>Conference Schedule</h2></div>
                                    
                                    <!--Place Order-->
                                    <div class="place-order">
                                        
                                        <button type="button" class="theme-btn btn-style-one"><span class="btn-title">View Schedule</span></button>
                                        
                                    </div>
                                    <!--End Place Order-->
                                    
                                </div>
                                
                                
                            </div>
                        </div>                             
                    </form>
                    
                </div>
                
            </div><!--End Billing Details-->
        </div>
    </div>

@endsection