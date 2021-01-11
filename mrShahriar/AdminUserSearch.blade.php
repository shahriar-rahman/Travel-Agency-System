@extends('layout.layout8Admin')

@section('content')
<br><br><br><br><br> 
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
            <a class="active"  href="/pages/UserIndex"> Users</a>   
            <a class="active"  href="/pages/AdminUserStats"> Statistics</a>           
        </h1>   
        <br> 
        <button class="open-button" onclick="openForm()"><h3>Search</h3></button>
        <div class="form-popup" id="myForm">
{!! Form::open(['action' => 'postsController@SearchUserResults', 'method' => 'GET', 'class'=> 'form-container']) !!}
  
    
    <div class="form group">
    {{Form::text('Search','',['class' => 'form control', 'placeholder' => 'Enter Username',
    'size' => '45x50' 
    ] ) }} 
    {{Form::submit ('Search User', ['class' => 'btn btn-primary'] ) }}<br>
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