@extends('layout.layout8Admin')

@section('content')
<br><br><br><br><br><br> 
<table>
    <tr>
        <th> First Name </th> 
        <th> Last Name </th> 
        <th> User Name </th> 
        <th> Registered On </th>  
        <th> Hotel Reservations </th>   
        <th> Total Hotel Spendings </th> 
        <th> Travels</th> 
    </tr>
    @if (count($show)>0)
    @foreach($show as $p)
        <h2><tr>
        <td>{{$p->fName}}</td> &emsp;&emsp;
        <td>{{$p->lName}}</td> &emsp;&emsp;
        <td>{{$p->userName}}</td> &emsp;&emsp;
        <td>{{$p->registeredOn}}</td> &emsp;&emsp;
        <td>{{$p->visits}}</td> &emsp;&emsp;
        <td>{{$p->sumValue}} Tk</td> &emsp;&emsp; 
        <td>{{$p->travelCount}}</td> &emsp;&emsp;
        </h2></tr>
        @endforeach
        @endif
 
        <div class="topnav">
                <div class="boxhead"> 
                        <h5> Displaying User Database</h5>
        <h1>
            <a class="active"  href="/AdminWelcome"> Home</a>
            <a class="active"  href="/pages/AdminUserSearch"> Search</a>   
            <a class="active"  href="/pages/UserIndex "> Users</a>         
        </h1>     

        <br> <br> <br> <br> 
        <button class="open-button" onclick="openForm()"><h3>Delete</h3></button>
        <div class="form-popup" id="myForm">
{!! Form::open(['action' => 'postsController@DeleteUser', 'method' => 'GET', 'class'=> 'form-container']) !!}
  
    
    <div class="form group">
    {{Form::text('UserDel','',['class' => 'form control', 'placeholder' => 'Enter Username',
    'size' => '45x50' 
    ] ) }} 
    {{Form::submit ('Delete User', ['class' => 'btn btn-primary'] ) }}<br>
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
