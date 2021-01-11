    <!doctype html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">


            <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

            <!-- Styles -->
            <style>
                html, body {
                    background-color:darkslateblue;
                background-image: url("/images/1.jpg");
                background-position: top;
                background-repeat: no-repeat;
                background-size: 100%;
                /*width:2000px;
                height:500px;*/
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
                    /*background-color:midnightblue;*/
                    /*background-color: rgba( darkcyan, darkcyan, darkcyan, 0.5);*/
                    background-blend-mode:soft-light;
                    overflow : hidden;
                    text-align: center;
                    padding : 2px 0px;
                    position: absolute;
                    top: 9%;
                    width : 100%;

                    
                    
                    /*position: absolute;
                    right: 10px;
                    top: 18px;*/
                }
                .topnav a:hover{
                    background-color:slateblue;
                }

                h1{
                    font-family: 'Geneva', sans-serif;
                    font-weight: 20;
                    font-size: 20px;
                    font-style:normal;
                    text-decoration-style: solid;
                    letter-spacing: 2px;
                    word-spacing: 50px;
                    text-shadow: 4px 4px black;
                    color: aliceblue;
                }
                a:link{
                    color:aqua;
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
                h7{
                    font-family: 'Nunito', sans-serif;
                    font-weight: 20;
                    font-size: 20px;
                    font-style:normal;
                    text-decoration-style: solid;
                    letter-spacing: 2px;
                    word-spacing: 2px;
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
                /*H2 VERSION C*/
            h5{
                    font-family: 'Trebuchet MS', sans-serif;
                    font-weight: 20px;
                    font-size: 20px;
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
                    animation: glow 1s infinite alternate;
                }

                @-webkit-keyframes glow {
    from {
        text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e60073;
    }
    to {
        text-shadow: 0 0 20px #fff, 0 0 30px aqua, 0 0 40px #ff4da6, 0 0 50px aqua, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
    }
    }

                table {
                    font-family: 'Geneva', sans-serif;
                    font-weight: 20;
                    font-size: 20px;
                    width:100%;
                    position: relative;
                    top : 1px;

                }
                td{
                    border: 1px solid #dddddd;
                    text-align: left;
                    padding: 8px;
                }
                th{
                    border: 1px solid #dddddd;
                    text-align: left;
                    padding: 8px;
                }
                tr:nth-child(even){
                    background-color:indigo;                
                }
                tr:nth-child(odd){
                    background-color:darkslateblue;             
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
    background-color:darkslateblue;
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
    background-color:aquamarine;
    color: aquamarine;
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

            </style>
        <body>
            @include ('inc.messages')
            @yield('content')
        </body>