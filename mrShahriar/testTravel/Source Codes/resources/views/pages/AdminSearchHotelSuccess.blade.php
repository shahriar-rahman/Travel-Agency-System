@extends('layout.layout8Admin')

@section('content')
<br><br><br><br><br><br><br><br><br> 
<table>
    <tr>
        <th> Hotel Name </th> 
        <th> Hotel ID </th>       
        <th> Location </th>  
        <th> Country </th> 
        <th> Premium Price </th>   
        <th> Deluxe Price </th>  
        <th> Premium Remaining </th>   
        <th> Deluxe Remaining </th>  
        <th> Star Rating </th>     
        <th> User Rating </th>      

    </tr>
    @if (count($show)>0)
    @foreach($show as $p)
        <h2><tr>
        <td>{{$p->hName}}</td> &emsp;&emsp;
        <td>{{$p->hID}}</td> &emsp;&emsp;
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
                        <h5> Displaying Hotel Database</h5>
        <h1>
            <a class="active"  href="/AdminWelcome"> Home</a>
            <a class="active"  href="/pages/CreateNewHotel"> Create </a>  
            <a class="active"  href="/pages/AdminHotelSearch"> Search</a>             
        </h1>    