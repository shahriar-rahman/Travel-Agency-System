@extends('layout.layout2')
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
               /* background-color: #fff;*/
               background-image: url("/images/homeBg.jpg");
               background-position: center;
               background-repeat: no-repeat;
               background-size : cover;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                color :ivory;
            }

            .full-height {
                height: 100vh;
            }
            .boxhead a{color: #636b6f;text-decoration: none;}

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }
            .topnav {
                background-color:darkslateblue;
                /*background-color: rgba( darkcyan, darkcyan, darkcyan, 0.5);*/
                background-blend-mode:soft-light;
                overflow : hidden;
                text-align: center;
                padding : 2px 0px;
                position: absolute;
                top: 92.7%;
                width : 100%;
                 opacity: 0.8;

                
                
                /*position: absolute;
                right: 10px;
                top: 18px;*/
            }
            .topnav a:hover{
                background-color:slateblue;
            }
/*H5 IS A BACKUP OF H1 */
h5{
                font-family: 'Nunito', sans-serif;
                font-weight: 20;
                font-size: 20px;
                font-style:normal;
                text-decoration-style: solid;
                letter-spacing: 2px;
                word-spacing: 50px;
                text-shadow: 4px 4px black;
                color: aliceblue;
            }
            h1{
                font-family: 'Nunito', sans-serif;
                font-weight: 20;
                font-size: 20px;
                font-style:normal;
                text-decoration-style: solid;
                letter-spacing: 2px;
                word-spacing: 50px;
                text-shadow: 4px 4px black;
                color: aliceblue;
                -webkit-animation: glow 1s ease-in-out infinite alternate;
                -moz-animation: glow 1s ease-in-out infinite alternate;
                animation: glow 1s infinite alternate;
            }
            h8{
                font-family: 'Nunito', sans-serif;
                font-weight: 20;
                font-size: 20px;
                font-style:normal;
                text-decoration-style: solid;
                letter-spacing: 2px;
                word-spacing: 1px;
                text-shadow: 4px 4px black;
                color: aliceblue;
                -webkit-animation: glow 1s ease-in-out infinite alternate;
                -moz-animation: glow 1s ease-in-out infinite alternate;
                animation: glow 1s infinite alternate;
            }
            /*H2 VERSION A*/
            h2{
                font-family: 'Nunito', sans-serif;
                font-weight: 10px;
                font-size: 15px;
                font-style:normal;
                text-decoration-style: solid;
                letter-spacing: 2px;
                word-spacing: 0px;
                text-shadow: 1px 1px black;
                color:cyan;
            }
            /*H2 VERSION B*/
            h3{
                font-family: 'Nunito', sans-serif;
                font-weight: 10px;
                font-size: 15px;
                font-style:normal;
                text-decoration-style: solid;
                letter-spacing: 2px;
                word-spacing: 0px;
                text-shadow: 1px 1px black;
                color:cyan;
                -webkit-animation: glow 1s ease-in-out infinite alternate;
                -moz-animation: glow 1s ease-in-out infinite alternate;
                animation: glow 1s infinite alternate;
            }
            h4{ -webkit-animation: glow 1s ease-in-out infinite alternate;
                -moz-animation: glow 1s ease-in-out infinite alternate;
                animation: glow 1s infinite alternate;}

            @-webkit-keyframes glow {
            from {
            text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e60073;
            }
            to {
            text-shadow: 0 0 20px #fff, 0 0 30px aqua, 0 0 40px #ff4da6, 0 0 50px aqua, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
            }
            }
           
            a:link{
                color:aqua;
            }
     

            /*.links > a {
                color: #636b6f;
                padding: 0 50px;
                font-size: 15px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }*/

            /* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color:darkslateblue;
  color: white;
  padding: 3px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  top: 0%;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  top: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: darkslateblue;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 90%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color:seagreen;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color:crimson;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}

            .m-b-md {
                margin-bottom: 30px;
            }
            .conainer{width: 20 %;}
            .word {
                font-family: 'Geneva', sans-serif;
                font-weight: 10px;
                font-size: 20px;
                font-style: normal;
                text-decoration-style: solid;
                letter-spacing: 1px;                
                /*word-spacing: 75px;*/
                /*text-shadow: 4px 4px black;*/
                position: absolute;
                right: 88%;
                top: 5%;
                color:lightblue;
            }
            h6{ -webkit-animation: glow 1s ease-in-out infinite alternate;
                -moz-animation: glow 1s ease-in-out infinite alternate;
                animation: glow 1s infinite alternate;}

            .w1 { animation : w1anim 10s infinite;} 
            .w2 { animation : w2anim 10s infinite;}
            @keyframes w1anim{ 20%{opacity: 0;} 30%{opacity: 1;} 40%{opacity: 0;} 60%{opacity: 0;} 80%{opacity: 1;} 100%{opacity: 1;} }
            @keyframes w2anim{ 20%{opacity: 0;} 30%{opacity: 1;} 40%{opacity: 0;} 60%{opacity: 0;} 80%{opacity: 1;} 100%{opacity: 1;} }

            @-webkit-keyframes glow {
            from {
            text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e60073;
            }
            to {
            text-shadow: 0 0 20px #fff, 0 0 30px aqua, 0 0 40px #ff4da6, 0 0 50px aqua, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
            }
            }
            .button {
            padding: 30px 0px;
            border: none;
            cursor: pointer;
            opacity: 0.8;
            position: fixed;
            top: 90.5%;
            right: 0%;
            width: 280px; 
            height: 0%;
            font-family: 'Nunito', sans-serif;
                font-weight: 0; 
                font-size: 110%;
                font-style:normal;
                text-decoration-style: solid;
                letter-spacing: 2px;
                word-spacing: 0px;
                text-shadow: 1px 1px black;
                color:cyan;
                line-height: 0;
                -webkit-animation: glow 1s ease-in-out infinite alternate;
                -moz-animation: glow 1s ease-in-out infinite alternate;
                animation: glow 1s infinite alternate;
            }
            .button:hover{
                background-color:darkslateblue;
                opacity: 1;
            }

 .marquee {
    width: 50%;
    margin: 0 auto;
    white-space: nowrap;
    overflow: hidden;
    box-sizing: border-box;
    position: fixed;
    top:13%;
    right: 25%;
}

.marquee span {
    display: inline-block;
    padding-left: 100%;  /* show the marquee just outside the paragraph */
    animation: marquee 15s linear infinite;
}

.marquee span:hover {
    animation-play-state: paused
}

/* Make it move */
@keyframes marquee {
    0%   { transform: translate(0, 0); }
    100% { transform: translate(-100%, 0); }
}

        </style>
    </head>

    <body>
            @section('layout2')


        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <div class="container"><h4>
                <div class="word w1"> Hello {{$getTempName}},</div> 
                <div class="word w2"> <br> Welcome! &emsp;</div></h4>
            </div>

            @if( count($getDistrictFlight) > 0)  
            <h3><p class="microsoft marquee"><span> Showing Available Airlines in your District :
            @foreach ($getDistrictFlight as $p)&emsp;  {{$p->FlightName}} &emsp;  &emsp;  
            @endforeach  </span></p></h3>
            @else  <h3><p class="microsoft marquee"><span> Sorry! No Flights Available in your current District.  </span></p></h3>
            @endif

            <div class="topnav">
                    <div class="boxhead">  <h1>
                <a class="active"  href="/pages/UserProfile">Profile</a>
                <a href="/pages/flightIndex">Flights</a>
                <a href="/pages/ShowHotelIndex">Hotels</a> 
                <a href="/pages/cityIndex">Cities</a> 
                <a href="/pages/ShowTravels"> Travels </a>   
                <a href="/pages/showHotels"> Reservations </a>     
                <a href="/pages/UserInbox"> Inbox </a> </h1>                            
            </div>
        </div>
        <a href="/pages/LoggedOut"><p class="button">&emsp;&emsp;&emsp;&ensp;&ensp;&ensp; Sign Out  </p></button></a>

        <button class="open-button" onclick="openForm()"><h3>Location Tracker</h3></button>
        <div class="form-popup" id="myForm">
{!! Form::open(['action' => 'postsController@StoreTempDistrict', 'method' => 'GET', 'class'=> 'form-container']) !!}

    <h3> Tell us your current District </h3>    
    
    <div class="form group">

    {{Form::text('title','',['class' => 'form control', 'placeholder' => 'District Name',
    'size' => '45x50' 
    ] ) }} 

    <br>

    {{Form::submit ('Submit', ['class' => 'btn btn-primary'] ) }}<br>
    {{Form::button ('Hide', ['class' => 'btn cancel', 'onClick'=> 'closeForm()' ]  ) }}
</div>   
</div>

    {{!! Form::close()}}
    <script>
        function openForm() {
            document.getElementById("myForm").style.display = "block";
        }
        
        function closeForm() {
            document.getElementById("myForm").style.display = "none";
        }
        </script>  

            </div>
        </div>       
        @endsection
    </body>
</html>