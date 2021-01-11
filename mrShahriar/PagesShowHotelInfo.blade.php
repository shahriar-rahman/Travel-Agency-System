@extends('layout.layout3')

@section('content')
<br> <br> <br>  <br> <br>

<h7> &nbsp Hotel Name : {{$ShowHotelData->hName}}  </h7> 
<?php
echo str_repeat( '</br>', 3);
?>
<h6> &nbsp Location : {{$ShowHotelData->loc}}<?php
echo str_repeat( '&nbsp', 20);
?> 
 Country : {{$ShowHotelData->country}}</h6>
<h6>&nbsp Premium Room Price : {{$ShowHotelData->premPrice}} Tk</h6>
<h6>&nbsp Deluxe Room Price : {{$ShowHotelData->delPrice}} Tk <?php
    echo str_repeat( '&nbsp', 10);
?>
Hotel Rating : {{$ShowHotelData->stars}} Stars </h6>
<h5> &nbsp Deluxe Rooms Available : {{$ShowHotelData->delLefts}}   <?php
    echo str_repeat( '&nbsp', 20);
    ?>
&nbsp Premium Rooms Available : {{$ShowHotelData->premLefts}} </h5>
 <h5> &nbsp
    User Rating : {{$ShowHotelData->Rating}} 
<?php
    echo str_repeat( '&nbsp', 30);
?>
   &nbsp Hotel ID : {{$ShowHotelData->hID}}</h5>

    
<div class="topnav">
    <div class="boxhead"> 
        <h1>
<a class="active"  href="/welcome"> Home</a>
<a class="active"  href="/pages/cityIndex"> Cities </a>
<a class="active"  href="/pages/flightIndex"> Flights </a>
</h1>     </div>    </div>
<br>  <br> <br> <br>  <br> <br> 

<div class="container"><h4>
    <div class="word w1"> Stay with {{$ShowHotelData->hName}}, Enjoy! </div></h4><h4>
</div>

<button class="open-button" onclick="openForm()"><h3>Book Ticket</h3></button>
        <div class="form-popup" id="myForm">
{!! Form::open(['action' => 'postsController@confirmHotel', 'method' => 'GET', 'class'=> 'form-container']) !!}

    <h3> Please fill the required fields </h3>    
    
    <div class="form group">

        <input type="text" placeholder="Confirm your username" name="username" required>
        <input type="password" placeholder="Confirm your Password" name="password" required>
        <input type="text" placeholder="Choose a Room Type" name="room" required>
        <input type="text" placeholder="Enter Hotel ID" name="hID" required>

<h2>
    <p> <label> <input class="with-gap" name="group3" type="radio" checked />
    <span>Master Card</span></label></p><label> 
            <input class="with-gap" name="group3" type="radio" checked />
    <span>VISA </span></label></p> <label> 
            <input class="with-gap" name="group3" type="radio" checked />
    <span>American Express </span></label></p><label> 
            <input class="with-gap" name="group3" type="radio" checked />
    <span>Discover </span></label></p>
    </h2>
    
    <input type="text" placeholder="Enter your Card Number" name="cardNo" required>
    <br>
    {{Form::submit ('Confirm Payment', ['class' => 'btn btn-primary'] ) }}<br>
    {{Form::button ('Cancel Payment', ['class' => 'btn cancel', 'onClick'=> 'closeForm()' ]  ) }}
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

@endsection