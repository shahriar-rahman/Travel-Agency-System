@extends('layout.layout8Admin')

@section('content')
<br>  
<table>
    <tr>
        <th> Airline </th> 
        <th> Destination </th>      
        <th> From </th>   
        <th> Date </th>  
        <th> Regular Class </th>  
        <th> Business Class </th> 
        <th> Distance </th>        
        <th> Flight ID </th>  
        <th> Location ID </th> 
        <th> Seats </th>     

    </tr>
    @if (count($post)>0)
    @foreach($post as $p)
        <h2><tr>
        <td>{{$p->FlightName}}</td> &emsp;&emsp;
        <td>{{$p->Location}}</td> &emsp;&emsp;
        <td>{{$p->FromLoc}} </td> &emsp;&emsp;
        <td>{{$p->Date}}</td> &emsp;&emsp;
        <td>{{$p->PriceRegular}} Tk. </td>&emsp;&emsp;
        <td>{{$p->PriceBusiness}} Tk. </td>&emsp;&emsp;
        <td>{{$p->DistanceFromDhaka}} km</td>        

        <td>{{$p->FlightId}} </td>&emsp;&emsp;
        <td>{{$p->LocID}} </td>&emsp;&emsp;
        <td>{{$p->AvailableSeats}} </td>
        </h2></tr>
        @endforeach
        @endif
 
        <div class="topnav">
                <div class="boxhead"> 
                    <h5> Displaying Flights Database</h5>
                    <h1>
            <a class="active"  href="/AdminWelcome"> Home</a>
            <a class="active"  href="/pages/CreateNewFlight"> Create </a>  
            <a class="active"  href="/pages/AdminFlightSearch"> Search</a> 
        </h1>     

        <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> 
        <button class="open-button" onclick="openForm()"><h3>Delete</h3></button>
        <div class="form-popup" id="myForm">
{!! Form::open(['action' => 'postsController@DeleteFlight', 'method' => 'GET', 'class'=> 'form-container']) !!}
  
    
    <div class="form group">
    {{Form::text('DeleteBtn','',['class' => 'form control', 'placeholder' => 'Enter Flight ID',
    'size' => '45x50' 
    ] ) }} 
    {{Form::submit ('Delete Flight', ['class' => 'btn btn-primary'] ) }}<br>
    {{Form::button ('Hide', ['class' => 'btn cancel', 'onClick'=> 'closeForm()' ]  ) }}
</div>   
</div>

    {{!! Form::close()}}

    <script>
        function openForm() {
            document.getElementById("myForm").style.display = "block";
        }
        
        function closeForm() {
            document.getElementById("myForm").style.display = "none";
        }
        </script> 
    </div> </div>
            

        

        @endsection
