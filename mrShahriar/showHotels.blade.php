@extends('layout.layout1')

@section('content')

<br> <br> <br> <br>  

<h5> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    Displaying all Hotel Room Bookings..</h5>
<table>
    <tr>
        <th> Date Booked </th>       
        <th> Hotel Name </th>  
        <th> Location </th>   
        <th> Costs </th>      

    </tr>
    @if (count($show)>0)
    @foreach($show as $p)
        <h2><tr>
        <td>{{$p->date}}</td> &emsp;&emsp;
        <td>{{$p->hotelName}} </td> &emsp;&emsp;
        <td>{{$p->destination}}</td> &emsp;&emsp;
        <td>{{$p->cost}} Tk. </td>&emsp;&emsp;
        </h2></tr>
        @endforeach
        @endif
        <div class="topnav">
                <div class="boxhead"> 
                    <h1>
            <a class="active"  href="/welcome"> Home</a>
            <a class="active"  href="/pages/cityIndex"> Cities </a>
        </h1>     </div>    </div>
            


        @endsection
