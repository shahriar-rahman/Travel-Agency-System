@extends('layout.layout8Admin')

@section('content')
<br><br><br><br><br><br> <br><br> 
<table>
    <tr>
        <th> First Name </th> 
        <th> Last Name </th> 
        <th> User Name </th>  
        <th> Contact Number </th>         
        <th> Email </th>         
    </tr>
    @if (count($show)>0)
    @foreach($show as $p)
        <h2><tr>
        <td>{{$p->fName}}</td> &emsp;&emsp;
        <td>{{$p->lName}}</td> &emsp;&emsp;
        <td>{{$p->userName}}</td> &emsp;&emsp;
        <td>{{$p->contactNo}}</td> &emsp;&emsp;
        <td>{{$p->email}}</td> &emsp;&emsp;
        </h2></tr>
        @endforeach
        @endif
 
        <div class="topnav">
                <div class="boxhead"> 
                        <h5> Displaying User Database</h5>
        <h1>
            <a class="active"  href="/AdminWelcome"> Home</a>
            <a class="active"  href="/pages/AdminUserSearch"> Search</a>   </h1>
        <br> 
 

    </div> </div>