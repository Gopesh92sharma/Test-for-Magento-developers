<?php
require_once "connection.php";

$select_query = "select * from user_info";
					$select_query_run = $conn->prepare($select_query);
					$select_query_run->execute();
?>



<!Doctype html>
<html>
<body>
<h2 align = center>User Data<h2>
<table border="2px solid" width="100%" border="merg">

<tr>
<th>Id</th>
<th>First Name</th>
<th>Last Name</th>
<th>Email</th>
<th>Date of birth</th>
<th>Mobile</th>
<th>Designation</th>
<th>Gender</th>
<th>Hobbies</th>
</tr>

<?php
while($result = $select_query_run->fetch(PDO::FETCH_ASSOC)){
?>
<tr>

<td><?php echo $result['id'];?></td>
<td><?php echo $result['First_Name'];?></td>
<td><?php echo $result['Last_Name'];?></td>
<td><?php echo $result['Email'];?></td>
<td><?php echo $result['Date_of_Birth'];?></td>
<td><?php echo $result['Mobile'];?></td>
<td><?php echo $result['Designation'];?></td> 
<td><?php echo $result['Gender'];?></td>
<td><?php echo $result['Hobbies'];?></td>

<?php
}
?>
</body>
</html>