@extends('layout.layout6')

@section('content')

&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;

<h5> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    Displaying Location Results..</h5>
<table>
    <tr>
        <th> Hotel Name </th>       
        <th> Location </th>  
        <th> Country </th> 
        <th> Premium Price </th>   
        <th> Deluxe Price </th>  
        <th> Premium Price </th>   
        <th> Deluxe Price </th>  
        <th> Star Rating </th>      

    </tr>
    @if (count($getDistrictFlight)>0)
    @foreach($getDistrictFlight as $p)
        <h2><tr>
        <td><a href="/hotels/{{$p->hID}}">{{$p->hName}}</td> &emsp;&emsp;
        <td>{{$p->loc}} </td> &emsp;&emsp;
        <td>{{$p->country}}</td> &emsp;&emsp;
        <td>{{$p->premPrice}} Tk. </td> &emsp;&emsp;
        <td>{{$p->delPrice}}  Tk. </td> &emsp;&emsp;
        <td>{{$p->premLefts}}</td> &emsp;&emsp;
        <td>{{$p->delLefts}}</td> &emsp;&emsp;
        <td>{{$p->stars}} </td>&emsp;&emsp;
        </h2></tr>
        @endforeach
        @endif




@endsection
