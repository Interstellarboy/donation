<?php 
include('dbcon.php');
include('session.php'); 

$result=mysqli_query($con, "select * from admins where user_id='$session_id'")or die('Error In Session');
$row=mysqli_fetch_array($result);

 ?>

<html>  
    <head><!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script></head>
</html>
<?php
   $conn = mysqli_connect("localhost","root","","donation");

   // Check connection
   if (mysqli_connect_errno())
     {
     echo "Failed to connect to MySQL: " . mysqli_connect_error();
     }
   
    $sql = "SELECT * FROM donation" ;
    
    $result = mysqli_query($conn,$sql);
     if(1 > 0){
  echo '<table class="table table-striped">
   <thead>
    <tr>
    
     <th scope="col">Name</th>
     <th scope="col">Email</th>
     <th scope="col">Number</th>
     <th scope="col">Pan</th>
     <th scope="col">City</th>
     <th scope="col">Amount</th>
     
    
    </tr>
   </thead>
   <tbody>';
   while($row = $result->fetch_assoc()){
    echo '<tr>';
     echo '<th scope="row">'.$row["name"].'</th>';
       echo '<td>'. $row["email"].'</td>';
       echo '<td>'. $row["number"].'</td>';
       echo '<td>'. $row["address"].'</td>';
       echo '<td>'. $row["city"].'</td>';
       echo '<td>'. $row["amount"].'</td>';
       
       
       '</tr>';
   }
   
   
   echo "Fetched data successfully\n";
   
   
 
}
?>


</body>
</html>

