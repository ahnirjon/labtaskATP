<!DOCTYPE html>
<html>
<head>
  <title>add new </title>
</head>
<body>

<form class="form-horizontal" action="/action_page.php">
    <div class="container">
      <h1>Add New</h1>
      <p>Please fill in this form to add an account</p>
      <hr>
      <label for="username"><b>user name</b></label>
      <input type="text" placeholder="username" name="username" required>


      <label for="email"><b>Email</b></label>
      <input type="email" placeholder="Email Address" name="email" required>
      <br>

      <label for="phone"><b>Phone</b></label>
      <input type="text" placeholder="ph number" name="phone" required>

        
        <button type="submit" class="signupbtn">Add New</button>
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      </div>
    </div>
  </form>
</body>
</html>


 