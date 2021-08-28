<?php
require_once "connection.php";

if($_SERVER['REQUEST_METHOD'] == "POST"){
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$dob = $_POST['dob'];
	$phone = $_POST['phone'];
	$design = $_POST['design'];
	//$gender = $_POST['gender'];
	//$hobbies = $_POST['hobbies'];
    }
	
	
	if(isset($_POST['submit']) && isset($_POST['hobbies'])){


    if(!empty($_POST['gender']) && !empty($_POST['hobbies'])) {

        $gender = $_POST['gender'];
		$hobbies = $_POST['hobbies']; 
        

        }
    }
	
	if(!empty($fname) && !empty($lname) && !empty($email) && !empty($dob) && !empty($phone) && !empty($design) && !empty($gender) && !empty($hobbies)){
		
		
	
	
	
	
	$insert_query = "insert into 						       			user_info(First_Name,Last_Name,Email,Date_of_Birth,Mobile,Designation,Gender,Hobbies)
						values('$fname','$lname','$email','$dob','$phone','$design',
						'$gender','$hobbies')";
						$insert_query_run = $conn->prepare($insert_query);
						$insert_query_run->execute();
						
						
							if($insert_query_run){
		echo '<script> alert(" Data Saved!!!!!!")</script>';
		header("location:show_data.php");
	}
	}else{
		echo '<script> alert(" Insert All valid values!!!!!!")</script>';
	}
	

	
	
	

?>











<!Doctype html>
<html>
<head>
<title>Magento test</title>

<style>
body{
font-family: Arial, Helvetica, sans-serif;
font-size: 14px;
}

* {
  box-sizing: border-box;
}

input[type=text], select  {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
  font-weight: bold;
}

input[type=submit] {
  width:30%;
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
.col-label {
  float: left;
  width: 25%;
  margin-top: 6px;
}
.col-input {
  float: left;
  width: 75%;
  margin-top: 6px;
}


.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>

</head>
<body>
	<div class="container">
	<h2 align=center> Registration Form </h2>

<form method = "post">

<div class = "row">
<div class = "col-label">
<label>First Name:</label>
</div>
<div class = "col-input" >
<input type="text" name="fname">
</div>
</div>

<div class = "row">
<div class = "col-label">
<label>Last Name:</label>
</div>
<div class = "col-input" >
<input type="text" name="lname">
</div>
</div>

<div class = "row">
<div class = "col-label">
<label>Email:</label>
</div>
<div class = "col-input" >
<input type="text" name="email">
</div>
</div>

<div class = "row">
<div class = "col-label">
<label>Date of Birth:</label>
</div>
<div class = "col-input" >
<input type="text" name="dob">
</div>
</div>

<div class = "row">
<div class = "col-label">
<label>Telephone/Mobile:</label>
</div>
<div class = "col-input" >
<input type="text" name="phone">
</div>
</div>

<div class = "row">
<div class = "col-label">
<label>Designation:</label>
</div>
<div class = "col-input" >
<select name="design">
    <option value="php developer">Php Developer</option>
    <option value="java developer">Java Developer</option>
    <option value="python developer">Python Developer</option>
  </select>
</div>
</div>

<div class = "row">
<div class = "col-label">
<label>Gender</label>
</div>
<div class = "col-input" >
<input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="other">Other
</div>
</div>


<div class = "row">
<div class = "col-label">
<label>Hobbies</label>
</div>
<div class = "col-input" >
<input type="checkbox" name="hobbies" value="Playing">Playing
<input type="checkbox" name="hobbies" value="reading_books">Reading Books
<input type="checkbox" name="hobbies" value="gardening">Gardening
<input type="checkbox" name="hobbies" value="Watching_movies">Watching Movies
</div>
</div>


<div class = "row">
<div class = "col-label">
<input type="submit" name="submit" value="submit">
</div>
</div>
</div>
</form>
</div>

</form>
</body>
</html>