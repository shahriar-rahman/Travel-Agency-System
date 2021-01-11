@extends('layout.layout1')

@section('content')

<br> <br> <br> <br>  
<h5> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
     Displaying all available Tour Locations in our System..</h5>
<table>
    <tr>
        <th> Destination </th>  
        <th> Country </th>   
        <th> Distance </th>  
        

    </tr>
    @if (count($post)>0)
    @foreach($post as $p)
        <h2><tr>
        <td> <a href="/Location/{{$p->LocId}}"> {{$p->Location}}</td> &emsp;&emsp;</a>
        <td>{{$p->Country}}</td> &emsp;&emsp;
        <td>{{$p->DistanceFromDhaka}} Km </td>&emsp;&emsp;
        </h2></tr>
        @endforeach
        @endif
        <div class="topnav">
                <div class="boxhead"> 
                    <h1>
            <a class="active"  href="/welcome"> Home</a>
            <a class="active"  href="/pages/flightIndex"> Flights </a>
            <a class="active"  href="/pages/userPackage"> Packages </a>
        </h1>     </div>    </div>
            


        @endsection
