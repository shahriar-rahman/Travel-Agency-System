@extends('layout.layout10Admin')

@section('content')

<html><body>
        <button class="open-button" onclick="openForm()"><h3>Compose New Message</h3></button>
        <div class="form-popup" id="myForm">
{!! Form::open(['action' => 'postsController@SendAdminMessage', 'method' => 'GET', 'class'=> 'form-container']) !!}
  
        <h3>Please enter the following fields </h3>

<div class="form group">
{{Form::text('user','',['class' => 'form control', 'placeholder' => 'Enter Username',
'size' => '45x50' 
] ) }} <br>
{{Form::text('newText','',['class' => 'form control', 'placeholder' => 'Enter Text Message',
'size' => '45x50'
] ) }} <br>
{{Form::submit ('Send', ['class' => 'btn btn-primary'] ) }}
{{Form::button ('Hide', ['class' => 'btn cancel', 'onClick'=> 'closeForm()' ]  ) }}
</div>   
</div>

{{!! Form::close()}}
<br> <br> <br> <br> <br> <br> <br><br>  
<table>
    <tr>
        <th> Username </th> 
        <th> Text </th>  
    </tr>
    @if (count($show)>0)
    @foreach($show as $p)
        <h2><tr>
        <td>{{$p->userName}}</td> &emsp;&emsp;
        <td>{{$p->MessageText}}</td> &emsp;&emsp;       
        </h2></tr>
        @endforeach
        @endif
 
        
        <div class="topnav">
                <div class="boxhead"> 
                    <h5> Displaying Message from Users</h5>
                    <h1>
            <a class="active"  href="/AdminWelcome"> Home</a>
            <a class="active"  href="/pages/UserIndex"> Users </a>  
        </h1>     

        <br> <br> 
 


    <script>
        function openForm() {
            document.getElementById("myForm").style.display = "block";
        }
        
        function closeForm() {
            document.getElementById("myForm").style.display = "none";
        }
        </script> 
    </div> </div>           @endsection
</body>
</html>
