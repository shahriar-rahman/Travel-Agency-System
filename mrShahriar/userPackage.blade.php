@extends('layout.layout1')

@section('content')

<table>
    <tr>
        <th> Location </th>       
        <th> Hotel Name </th>  
        <th> Flight Name </th> 
        <th> Distance </th>     

    </tr>
    @if (count($show)>0)
    @foreach($show as $p)
        <h2><tr>
        <td>{{$p->Location}}</td> &emsp;&emsp;
        <td>{{$p->hName}} </td> &emsp;&emsp;
        <td>{{$p->FlightName}}</td> &emsp;&emsp;
        <td>{{$p->DistanceFromDhaka}}</td> &emsp;&emsp;
        </h2></tr>
        @endforeach
        @endif
        <h5> Displaying Package Results </h5>
        <div class="topnav">
                <div class="boxhead"> 
                    
                    <h1>
            <a class="active"  href="/welcome"> Home</a>
            <a class="active"  href="/pages/cityIndex"> Cities </a>            
            <a class="active"  href="/pages/userPackageStats"> Availability </a>
        </h1>     </div>    </div>
            


        @endsection
