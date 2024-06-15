<?php

include('Db.php');
$sql = "SELECT * from `register`";
$fetchData = mysqli_query($connection,$sql);

$row = mysqli_num_rows($fetchData);   // store the number of rows

// var_dump( mysqli_fetch_assoc($fetchData));
// var_dump( mysqli_fetch_assoc($fetchData));
// var_dump( mysqli_fetch_assoc($fetchData));
// while($row=mysqli_fetch_assoc($fetchData) ){
//     echo $row["e_id"];
//     echo $row["e_name"];
// }
// echo $result;
// mysqli_fetch_assoc
// mysqli_affected_rows
$UserID="";
if(isset($_GET['update'])){ 
  header( "location: Update.php");
  
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">User ID</th>
      <th scope="col">USER NAME</th>
      <th scope="col">USER EMAIL</th>
      <th scope="col">REGISTRATION DATE</th>
      <th scope="col"> Operation </th>
    </tr>
  </thead>
  <tbody>
    <?php
        while($row=mysqli_fetch_assoc($fetchData) ){
            echo "
            <tr>
                <th scope='row'>".$row["e_id"]."</th>
                <td>".$row["e_name"]."</td>
                <td>".$row["e_email"]."</td>
                <td>".$row["registerDate"]."</td>
                <td> 
                  <form method='GET'>
                    <input type='hidden' class='btn btn-primary' value='' name='update'>
                    <a class='btn btn-primary' href='Update.php?user-id=".$row["e_id"]."' name='updatePerson'>Update</a>
                  
                  </form>
                </td>
            </tr>";
        }    
    
    ?>
   
  </tbody>
</table>


</body>
</html>