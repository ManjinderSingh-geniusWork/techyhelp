<html>
<head>
    <style>    
        @font-face {
            font-family: 'Open Sans';
            src: url({{ url("fonts/static/OpenSans-ExtraBold.ttf") }}) format("truetype");
            font-weight: 800;
            font-style: normal;
        }
        @font-face {
            font-family: 'Open Sans';
            src: url({{ url("fonts/static/OOpenSans-SemiBold.ttf") }}) format("truetype");
            font-weight: 700;
            font-style: normal;
        }
        @font-face {
            font-family: 'Open Sans';
            src: url({{ url("fonts/static/OpenSans-Bold.ttf") }}) format("truetype");
            font-weight: 600;
            font-style: normal;
        }
        @font-face {
            font-family: 'Open Sans';
            src: url({{ url("fonts/static/OpenSans-Medium.ttf") }}) format("truetype");
            font-weight: 500;
            font-style: normal;
        }
        @font-face {
            font-family: 'Open Sans';
            src: url({{ url("fonts/static/OpenSans-Regular.ttf") }}) format("truetype");
            font-weight: 400;
            font-style: normal;
        }
        @font-face {
            font-family: 'Open Sans';
            src: url({{ url("fonts/static/OpenSans-Light.ttf") }}) format("truetype");
            font-weight: 300;
            font-style: normal;
        }         
        *{
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            margin: 0;
            padding: 0;
            margin-top: 30px;
            font-family: 'Open Sans',arial,sans-serif, Arial, Helvetica, sans-serif;        
            font-size:14px
        }

        p{
            padding:15px 15px 0 0;
        }

        .text-center {
            text-align: center;
        }

       
        .inner_wrap {
            background-position: center;
            background-size: 100%;
            background-repeat: no-repeat;
            opacity: 1;
        }
        .water_mark{
           position: absolute;
           top: 350px;
           width: 100%;    
           opacity: 0.5;      
        }
        .doubledborder {
            background: white;
            color: black;
            font-family: 'Open Sans';
            padding: 20px;
            margin-bottom: 30px;
            border: 10px double black;
            outline: 5px solid black;
            overflow: hidden;
        }

        .cert_layout_wrap {
            margin: 5px auto;
            width: 850px;
            position: relative;
        }
        .z_444{
            z-index: 444;
            position: relative;

        }
        .inner_wrap {
            padding: 10px;
            backgorund:transprent
        }

        .srtext {
            color: #bf8f00;
            text-align: right;
        }

        .mc {
            color: #833c0b;
            font-size: 25px;
        }

        .stext {
            font-size: 20px;
            color: #833c0b;
            font-weight: 700;
        }

        .gentxt {
            font-size: 22px;
            margin-left: 20px;
            color: #000000;
            font-weight: 600;
        }

        .bluetxt {
            font-size: 20px;
            margin-left: 20px;
            color: #2e89ce;
        }
    </style>
    <title>STARGOLD WATERPROOFING & TILING SERVICES PTY LTD :: (techyhelp.net)</title>    
</head>
    <body>
        <div class="container">
            <div class="container">
                <div class="container doubledborder cert_layout_wrap">
                    <div class="inner_wrap" >
                            <img src="{{$logo}}"  class="water_mark"/>
                        <div class="z_444">
                            <img src="{{$logo}}" height="150px" style="margin: 10px;background: black;" />
                        </div>
                        <div class="z_444">
                            <h3 class="srtext">SR NO.{{ date('Y') }}/5AH/{{ $id }}</h3>
                            <p class="text-center stext" \><b class="mc">C</b>OMPLIANCE <b
                                    class="mc">C</b>ERTIFICATE – <b class="mc">W</b>ET <b class="mc">A</b>REAS
                            </p>
                            <p class="text-center stext" >Issued under Section 109C(1)(a)
                                Environmental Planning & Assessment Act </p>
                            <p class="text-center stext" >1979</p>
                        </div>
                        <div class="z_444">
                            <p class=" gentxt">BUILDER: <strong class="abhome">{{ $builder }}</strong></p>
                        </div>
                        <div class=" z_444">
                            <p style="font-size: 20px; margin-left:20px ;">Certify that building elements in wet areas within a building at:</p>
                        </div>
                        <div class="z_444">
                            <p class=" gentxt">Property details:</p>
                        </div>
                        <br>
                        <div class="z_444">
                            <p class=" gentxt"> <strong> Address: </strong>{{ $address }}</p>
                        </div>
                        <br>
                        <div class="z_444">
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
                                    <p class=" gentxt">By Name:<i  style="text-indent: 40; font-weight: 400;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(installation contractors name): </i>
                                    </p>
                                </li>
                            </ul>
                            <p class=" bluetxt" style="text-align: right;"><b>STARGOLD WATERPROOFING & TILING SERVICES PTY LTD </b></p>
                        </div>
                        <div class="z_444">
                            <p class=" gentxt"> <b style="font-size:35px;">C</b>ERTIFICATE No: <span style="color: #c45911;">14290896-9224267</span></p>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <p class=" gentxt"> DATE: {{date('d/m/Y')}}</p>
                            <p class=" gentxt"> Phone no: <a href="tel:0404474928" style="color: #000000;"> 0404474928 </a>
                            </p>
                            <p class=" gentxt"> Product Used: <span style="color: #0070c0;">Gripset 38fc Blue.</span></p>
                            <p class=" gentxt"> Product Warranty: 5 years</p>
                            <p class=" gentxt"> Email address: <a href="mailto:sukhisidhu107@gmail.com" style="color:#bf8f4f;"> sukhisidhu107@gmail.com </a></p>
                            <p class=" gentxt"> Signature: <img src="{{$sign}}" height="60px" alt="" style="vertical-align: middle;"></p>
                        </div>
                        <br>                     
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
