    @extends('layouts.stargold')

    @section('title', 'STARGOLD WATERPROOFING & TILING SERVICES PTY LTD')

    @section('sidebar')
        @parent
    @endsection

    @section('content')
        @if (@$address && @$builder)
            <div class="container">
                <a class="btn btn-black" href="{{route('download_pdf',$id)}}">Download</a>
                <div class="container doubledborder cert_layout_wrap">
                    <div style="background-image: url({{$logo}})" class="inner_wrap">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <img src={{$logo}} height="150px" style="margin: 10px; background-color: black;" />
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <h3 class="srtext">SR NO.{{date('Y')}}/5AH/11</h3>
                            <p class="text-center stext" style=" margin-top: -20px;"><b class="mc">C</b>OMPLIANCE <b
                                    class="mc">C</b>ERTIFICATE – <b class="mc">W</b>ET <b class="mc">A</b>REAS</p>
                            <p class="text-center stext" style=" margin-top: -25px;">Issued under Section 109C(1)(a)
                                Environmental Planning & Assessment Act </p>
                            <p class="text-center stext" style=" margin-top: -25px;">1979</p>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <p class=" gentxt">BUILDER: <strong class="abhome"">{{$builder}}</strong></p>
                        </div>
                        <div class=" col-lg-12 col-md-12 col-sm-12">
                            <p style="font-size: 20px; margin-left:20px ;">Certify that building elements in wet areas within a building at:</p>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <p class=" gentxt">Property details:</p>
                        </div>
                        <br>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <p class=" gentxt"> <strong> Address: </strong>{{$address}}</p>
                        </div>
                        <br>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <ul>
                                <li>
                                    <p class="bluetxt">Waterproofing Has been installed in accordance with Australian
                                        Standard
                                        AS 3740-2010 and Building Code of Australia, Volume 2
                                        Part 3.8.1 in Wet Areas only. </span></p>
                                </li>
                                <li>
                                    <p class=" bluetxt">Australian Standard 4654-2012 Waterproofing membranes for
                                        external
                                        above-ground use (AS 4654). </span></p>
                                </li>
                                <li>
                                    <p class=" gentxt">By Name:<i
                                            style="margin-inline-start: 15px; font-weight: 400;">(installation
                                            contractors name): </i>
                                    </p>
                                </li>
                            </ul>
                            <p class=" bluetxt" style="margin-inline-start: 150px;"><b>STARGOLD WATERPROOFING & TILING SERVICES PTY LTD </b></p>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <p class=" gentxt"> <b style="font-size:35px;">C</b>ERTIFICATE No: <span
                                    style="color: #c45911;">14290896-9224267</span></p>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <p class=" gentxt"> DATE: {{date('d/m/Y')}}</p>
                            <p class=" gentxt"> Phone no: <a href="tel:0404474928" style="color: #000000;"> 0404474928 </a></p>
                            <p class=" gentxt"> Product Used: <span style="color: #0070c0;">{{$product_used}}</span></p>
                            <p class=" gentxt"> Product Warranty: 5 years</p>
                            <p class=" gentxt"> Email address: <a href="mailto:sukhisidhu107@gmail.com"
                                    style="color:#bf8f4f;"> sukhisidhu107@gmail.com </a></p>
                            <p class=" gentxt"> Signature: <img src={{$sign}} height="60px" alt=""></p>
                        </div>
                        <br>
                        <br>
                        <br>
                    </div>
                </div>
                <button onclick="window.print()">Print this page</button>
            </div>
        @else
            <div class="login-box">
                <div  class="login_logo"> 
                 <img src="{{$logo}}" />
                </div>
                <h2>Get The Certificate</h2>
                <form method="post">
                    @csrf
                    <div class="user-box">
                    <input type="text" name="builder" required="">
                    <label>Builder</label>
                    </div>
                    <div class="user-box">
                    <input type="text" name="address" required="">
                    <label>Property Address</label>
                    </div>
                    <div class="user-box">
                    <input type="text" name="product_used" value = "Gripset 38fc Blue" required="">
                    <label>Product Used</label>
                    </div>
                  
                    <div class="container_btn">
                        <button   class="button"  type="submit" style="background: transparent;">
                            <div class="button__line"></div>
                            <div class="button__line"></div>
                            <span class="button__text">ENTRY</span>
                            <div class="button__drow1"></div>
                            <div class="button__drow2"></div>
                        </button>
                    </div>            
                </form>
            </div>

        @endif
    @endsection
