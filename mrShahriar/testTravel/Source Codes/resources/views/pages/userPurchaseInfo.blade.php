@extends('layout.layout8Admin')

@section('content')
<br><br><br><br><br><br> <br><br> 
<table>
    <tr>
        <th> Flight Name </th>              
        <th> Purchase Price </th>   
        <th> Regular Class Price </th> 
        <th> Business Class Price </th>  
        <th> Seats Remaining </th>         
        <th> Date </th>  
    </tr>
    @if (count($show)>0)
    @foreach($show as $p)
        <h2><tr>
        <td>{{$p->flightName}}</td> &emsp;&emsp;
        <td>{{$p->cost}}</td> &emsp;&emsp;
        <td>{{$p->PriceRegular}}</td> &emsp;&emsp;
        <td>{{$p->PriceBusiness}}</td> &emsp;&emsp;
        <td>{{$p->AvailableSeats}}</td> &emsp;&emsp;
        <td>{{$p->Date}}</td> &emsp;&emsp;
        </h2></tr>
        @endforeach
        @endif
 
        <div class="topnav">
                <div class="boxhead"> 
                        <h5> Displaying Purchased Database</h5>
        <h1>
            <a class="active"  href="/welcome"> Home</a>
            <a class="active"  href="/pages/UserProfile"> Profile</a>   </h1>
        <br> 
 

    </div> </div>