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

<h2>My Customers</h2> 

<a href="{{route('logout')}}" style="color: red;">Log out</a><br><br>
<a href="{{route('carlist')}}" style="color: blue;">Car List</a><br><br>
 
  <a href="{{route('admin.profile')}}"> <button type="button" class="btn btn-primary btn-lg">Profile</button></a>   


<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
 @if($students != null)
<table id="myTable">

  <tr class="header">
    <th style="width:33.3%;">User Name</th>
    <th style="width:33.3%;">Email</th>
    <th style="width:33.3%;">Phone</th>
    <th style="width:33.3%;">Actions</th>

  </tr>
  @foreach($students as $s)
          <tr>
            <td>{{$s->studentName}}</td>
            <td>{{$s->studentEmail}}</td>
            <td>{{$s->studentPhone}}</td>
        <td> 
            <a href="{{route('userEdit', ['id' => $s->studentId])}}" style="color: green;">Edit</a>  
            <a href="{{route('userDelete', ['id' => $s->studentId])}}" style="color: red;">Delete</a>
        </td>
         </tr>
 @endforeach
            @else
                  <form class="modal-content" action="/userEdit" method="post">

                 @csrf
                  <input type="hidden" name="id" value="{{$student->studentId}}">
                        <div class="container">
                          <h1>Sign Up</h1>
                          <p>Please fill in this form to create an account.</p>
                          <hr>
                          <label for="username"><b>user name</b></label>
                          <input type="text" placeholder="username" name="username" value="{{$student->studentName}}" required>

                         

                          <label for="email"><b>Email</b></label>
                          <input type="email" placeholder="Email Address" name="email" value="{{$student->studentEmail}}" required>
                          <br>

                          <label for="phone"><b>Phone</b></label>
                          <input type="text" placeholder="ph number" name="phone" value="{{$student->studentPhone}}" required>

                          <button type="submit" class="signupbtn"> Update</button>
                        </div>
                  </form>
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
