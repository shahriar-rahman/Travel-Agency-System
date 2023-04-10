@extends('layout.layout1')

@section('content')

<table>
    <tr>       
        <th> First Name</th>     
        <th> Last Name </th> 
        <th> Username </th> 
        <th> Password </th> 
        <th> Travel Count  </th> 
        <th> Email  </th> 
        <th> Contact No  </th>  

    </tr>
    @if (count($show)>0)
    @foreach($show as $p)
        <h2><tr>
        <td>{{$p->fName}} </td> &emsp;&emsp;
        <td>{{$p->lName}} </td> &emsp;&emsp;
        <td>{{$p->userName}}</td> &emsp;&emsp;
        <td>{{$p->password}}</td> &emsp;&emsp;
        <td>{{$p->travelCount}}</td> &emsp;&emsp;        
        <td>{{$p->email}} </td> &emsp;&emsp;
        <td>{{$p->contactNo}}</td> &emsp;&emsp;
        </h2></tr>
        @endforeach
        @endif
        <h5> Displaying User Profile </h5>
        <div class="topnav">
                <div class="boxhead"> 
                    
                    <h1>
            <a class="active"  href="/welcome"> Home</a>
            <a class="active"  href="/pages/cityIndex"> Cities </a>            
            <a class="active"  href="/pages/userPurchaseInfo"> Purchased Info </a>
        </h1>     </div>    </div>
            


        @endsection
