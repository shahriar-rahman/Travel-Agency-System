@extends('layout.layout1')

@section('content')

<table>
    <tr>       
        <th> Hotel Name </th>     
        <th> Deluxe Rooms Left </th> 
        <th> Premium Rooms Left </th> 
        <th> Flight Name  </th> 
        <th> Available Seats  </th> 

    </tr>
    @if (count($show)>0)
    @foreach($show as $p)
        <h2><tr>
        <td>{{$p->hName}}</td> &emsp;&emsp;
        <td>{{$p->premLefts}} </td> &emsp;&emsp;
        <td>{{$p->delLefts}} </td> &emsp;&emsp;
        <td>{{$p->FlightName}}</td> &emsp;&emsp;
        <td>{{$p->AvailableSeats}}</td> &emsp;&emsp;
        </h2></tr>
        @endforeach
        @endif
        <h5> Displaying Package Availablity </h5>
        <div class="topnav">
                <div class="boxhead"> 
                    
                    <h1>
            <a class="active"  href="/welcome"> Home</a>
            <a class="active"  href="/pages/cityIndex"> Cities </a>            
            <a class="active"  href="/pages/userPackage"> Package </a>
        </h1>     </div>    </div>
            


        @endsection
