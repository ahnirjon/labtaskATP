<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
</style>
</head>
<body>

<h2>Cars In the House</h2> 

<a href="{{route('logout')}}" style="color: red;">Log out</a><br><br>
<a href="{{route('logout')}}" style="color: blue;">Car List</a><br><br> 
  <a href="{{route('admin.profile')}}"> <button type="button" class="btn btn-primary btn-lg">Profile</button></a>   


<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
 @if($cars != null)
<table id="myTable">

  <tr class="header">
    <th style="width:20%;">Name</th>
    <th style="width:15%;">Cost</th>
    
    <th style="width:15%;">Type</th>
    <th style="width:40%;">Actions</th>

  </tr>
  @foreach($cars as $s)
          <tr>
            <td>{{$s->carName}}</td>
            <td>{{$s->carCost}}</td>
            <td>{{$s->carType}}</td>
            <td>{{$s->availability}}</td>
        <td> 
            <a href="{{route('carEdit', ['id' => $c->carId])}}" style="color: green;">Edit</a>  
            <a href="{{route('carDelete', ['id' => $c->carId])}}" style="color: red;">Delete</a>}}
        </td>
         </tr>
 @endforeach
            @else
                  {{-- <form class="modal-content" action="/carEdit" method="post">

                 @csrf
                  <input type="hidden" name="id" value="{{$car->carId}}">
                        <div class="container">
                          <h1>Sign Up</h1>
                          <p>Please fill in this form to create an account.</p>
                          <hr>
                          <label for="username"><b>Car name</b></label>
                          <input type="text" placeholder="carname" name="carname" value="{{$car->carName}}" required>

                         

                          <label for="email"><b>car Cost</b></label>
                          <input type="text" placeholder="cost" name="carcost" value="{{$car->carCost}}" required>
                          <br>

                          <label for="phone"><b>car Type</b></label>
                          <input type="text" placeholder="type" name="cartype" value="{{$car->carType}}" required>

                          <button type="submit" class="signupbtn"> Update</button>
                        </div>
                  </form> --}}
            @endif
 
</table>

<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

</body>
</html>
