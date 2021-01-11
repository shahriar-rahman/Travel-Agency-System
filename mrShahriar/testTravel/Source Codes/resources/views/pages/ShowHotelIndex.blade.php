@extends('layout.layout6')

@section('content')

<br> <br> <br> <br>  
<button class="open-button" onclick="openForm()"><h3>Search By Location</h3></button>    
<div class="form-popup" id="myForm">            
{!! Form::open(['action' => 'postsController@ShowLocationHotel', 'method' => 'GET', 'class'=> 'form-container']) !!}
<h3>&ensp; LOCATION SEARCH </h3>        
<div class="form group">
<input type="text" placeholder="Location Name" name="loc" required>
<br>
{{Form::submit ('Search', ['class' => 'btn btn-primary'] ) }}<br>
{{Form::button ('Cancel', ['class' => 'btn cancel', 'onClick'=> 'closeForm()' ]  ) }}
</div> </div>   <br><br>
{{!! Form::close() }}  

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

  
     
        <script>
            function openForm() 
            {   document.getElementById("myForm").style.display = "block";  }
            function closeForm() 
            {   document.getElementById("myForm").style.display = "none";   }
        </script> 
        
        <div class="topnav">
                <div class="boxhead"> 
                    <h1>
            <a class="active"  href="/welcome"> Home</a>
            <a class="active"  href="/pages/cityIndex"> Cities </a>
            <h7>
            <a class="active"  href="/pages/ShowPopularHotels"> Popular Hotels </a></h7> </h1> 
           </div>    </div>
            


        @endsection
