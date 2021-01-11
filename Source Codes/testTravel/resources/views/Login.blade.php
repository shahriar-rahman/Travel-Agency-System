<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

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

            .layer{
                background-color:rgba(25,25,25,0.8);
                position : absolute;
                top: 0;
                left :0 ;
                width: 100%;
                height : 100%;
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
            .button {
            background-color:darkslateblue;
            padding: 30px 0px;
            border: none;
            cursor: pointer;
            opacity: 0.8;
            position: fixed;
            top: 57%;
            right: 40%;
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
            .buttonf {
            background-color:darkslateblue;
            padding: 1px 30%;
            border: none;
            cursor: pointer;
            opacity: 0.50;
            position: fixed;
            top: 56.15%;
            right: 10%;
            width: 280px; 
            height: 0%;
            }
/*SIGN IN */
 /* Button used to open the contact form - fixed at the bottom of the page */
 .open-button {
  background-color:darkslateblue;
  color: white;
  padding: 3px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  top: 50%;
  right: 40%;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  top: 35%;
  right: 38.5%;
  border: 3px solid darkcyan;
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
  background-color:dodgerblue;
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
        </style>
    </head>

    <body>
<div class="background"><div class="layer";>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>    

        <!-- SIGN IN FORM STARTS --->
    <button class="open-button" onclick="openForm()"><h3>Sign In</h3></button>    
    <div class="form-popup" id="myForm">            
    {!! Form::open(['action' => 'postsController@verifyCredentials', 'method' => 'GET', 'class'=> 'form-container']) !!}
    <h3>&ensp; INPUT SECURE CREDENTIALS </h3>        
    <div class="form group">
    <input type="text" placeholder="Enter username" name="username" required>
    <input type="password" placeholder="Enter Password" name="password" required>
    <br>
    {{Form::submit ('Log in', ['class' => 'btn btn-primary'] ) }}<br>
    {{Form::button ('Cancel', ['class' => 'btn cancel', 'onClick'=> 'closeForm()' ]  ) }}
    </div> </div>   <br><br>
    {{!! Form::close() }}  
 
    <script>
        function openForm() 
        {   document.getElementById("myForm").style.display = "block";  }
        function closeForm() 
        {   document.getElementById("myForm").style.display = "none";   }
    </script> 
    <!-- SIGN IN FORM ENDS---> <!-- NEED MORE COFFEE --->              

    <p class="buttonf"></p></button>         
    <a href="/pages/uRegister"><p class="button">&emsp;&emsp;&emsp;&ensp;&ensp;&ensp; Register  </p></button></a>         

</div></div></body>