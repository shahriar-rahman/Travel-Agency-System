@extends('layout.layout1')

@section('content')

<br> <br> <br> <br>  

<h5> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    Displaying all results from current District..</h5>
<table>
    <tr>
        <th> Date </th>       
        <th> From </th>  
        <th> Destination </th> 
        <th> Airline </th>   
        <th> Costs </th>      

    </tr>
    @if (count($show)>0)
    @foreach($show as $p)
        <h2><tr>
        <td>{{$p->date}}</td> &emsp;&emsp;
        <td>{{$p->fromLoc}} </td> &emsp;&emsp;
        <td>{{$p->destination}}</td> &emsp;&emsp;
        <td>{{$p->flightName}}</td> &emsp;&emsp;
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
