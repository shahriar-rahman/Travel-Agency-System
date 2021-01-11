@extends('layout.layout6')

@section('content')

<br> <br> <br> <br>  

<h5> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    Displaying all Hotels..</h5>
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
        <th> User Rating </th>       

    </tr>
    @if (count($show)>0)
    @foreach($show as $p)
        <h2><tr>
        <td><a href="/hotels/{{$p->hID}}">{{$p->hName}}</td> &emsp;&emsp;
        <td>{{$p->loc}} </td> &emsp;&emsp;
        <td>{{$p->country}}</td> &emsp;&emsp;
        <td>{{$p->premPrice}} Tk. </td> &emsp;&emsp;
        <td>{{$p->delPrice}}  Tk. </td> &emsp;&emsp;
        <td>{{$p->premLefts}}</td> &emsp;&emsp;
        <td>{{$p->delLefts}}</td> &emsp;&emsp;
        <td>{{$p->stars}} </td>&emsp;&emsp;
        <td>{{$p->Rating}} </td>&emsp;&emsp;
        </h2></tr>
        @endforeach
        @endif
        <div class="topnav">
                <div class="boxhead"> 
                    <h1>
            <a class="active"  href="/welcome"> Home</a>
            <a class="active"  href="/pages/cityIndex"> Cities </a>
            <h7>
            <a class="active"  href="/pages/ShowHotelIndex"> Hotels </a></h7> </h1> 
           </div>    </div>
            


        @endsection
