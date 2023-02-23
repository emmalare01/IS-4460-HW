<html>
	<title>Add User</title>
<head>

</head>

<body>

<a href="login-form.php?id=1234">Login</a>
<a href="user-list.php?id=1235">Users</a>
<a href="user-details.php?id=1237">User Details</a>

<H1>Add User</H1>

<form action = 'somefile.php' method ='post'>
Username: <br>
<input type ="text" name = "username"><br>
Password: <br>
<input type ="text" name = "password"><br>
Name: <br>
<input type ="text" name = "name"><br>
Birthdate: <br>
<input type ="date" name = "birthdate"><br>
Email: <br>
<input type ="text" name = "email"><br>
Phone Number: <br>
<input type ="text" name = "phonenumber"><br>
Occupation: <br>
<input type ="text" name = "occupation"><br>
Address: <br>
<input type ="text" name = "address"><br><br>

</form>

<form action="file:///Applications/MAMP/htdocs/Homework/HW1/user-list.html">
         <button type="submit">Add User</button>
      </form>

</body>

</html>