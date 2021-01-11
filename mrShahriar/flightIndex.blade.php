@extends('layout.layout1')

@section('content')

<br> <br> <br> <br>  
<h5> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    Displaying all results from current District..</h5>
<table>
    <tr>
        <th> Airline </th> 
        <th> Destination </th>      
        <th> From </th>   
        <th> Date </th>  
        <th> Regular Class </th>  
        <th> Business Class </th> 
        <th> Distance </th>        

    </tr>
    @if (count($post)>0)
    @foreach($post as $p)
        <h2><tr>
        <td><a href="/flights/{{$p->FlightId}}"> {{$p->FlightName}}</td> &emsp;&emsp;
        <td>{{$p->Location}}</td> &emsp;&emsp;
        <td>{{$p->FromLoc}} </td> &emsp;&emsp;
        <td>{{$p->Date}}</td> &emsp;&emsp;
        <td>{{$p->PriceRegular}} Tk. </td>&emsp;&emsp;
        <td>{{$p->PriceBusiness}} Tk. </td>&emsp;&emsp;
        <td>{{$p->DistanceFromDhaka}} km</td>
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
